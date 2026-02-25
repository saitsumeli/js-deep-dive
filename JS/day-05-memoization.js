/*
===========================================================
Day 5 - Memoization (JS Deep Dive - Sait)

Hedef:
- Memoization (cache) mantığını kavramak
- memoize(fn) yazmak (çoklu parametre desteği)
- Aynı input tekrar gelirse hesaplama yapmamak
- Farklı input gelirse hesaplamak
- Ek: Primitive vs Object parametre davranışı (referans vs değer)
- Ek: Object parametrelerde cache anahtarı problemi ve çözümler
*/


/*
-----------------------------------------------------------
1) Memoization Nedir?
-----------------------------------------------------------

Memoization:
- Bir fonksiyonun "aynı input" için ürettiği "sonucu" saklamaktır.
- Bir sonraki aynı çağrıda fonksiyonu tekrar çalıştırmaz, cache'ten döner.

Önemli:
- "Fonksiyonu hafızaya atmıyoruz"
- "Fonksiyonun sonucunu" input'a göre saklıyoruz.
*/


/*
-----------------------------------------------------------
2) "Pahalı" (yavaş) bir fonksiyon ile test altyapısı
-----------------------------------------------------------

Amaç:
- Fonksiyon gerçekten kaç kez çalıştı, bunu saymak.
- Cache çalışıyorsa aynı inputta sayaç artmamalı.
*/

let calcCount = 0;

function expensiveSquare(n) {
  calcCount++;

  // Ağır işlem simülasyonu (CPU'yu oyalıyoruz)
  for (let i = 0; i < 5_000_000; i++) {}

  return n * n;
}


/*
-----------------------------------------------------------
3) Memoize (Gelişmiş) - Çoklu parametre desteği + Map cache
-----------------------------------------------------------

Neden Map?
- Object cache'te prototype sorunları / key dönüşümleri çıkabiliyor.
- Map daha güvenli ve net.

Cache key:
- args (parametreler) dizisini JSON.stringify ile stringe çeviriyoruz.

Dikkat:
- JSON.stringify her şey için mükemmel değil (circular, function, Date vb.).
- Ama "plain object" ve primitive senaryolarında gayet iş görür.
*/

function memoize(fn) {
  const cache = new Map();

  return function (...args) {
    // Tüm parametreleri tek bir anahtara çeviriyoruz
    const key = JSON.stringify(args);

    // "cache var mı?" kontrolü
    // has() kullanıyoruz çünkü sonuç 0 / false / "" olabilir.
    if (cache.has(key)) {
      console.log("[cache hit]", key);
      return cache.get(key);
    }

    console.log("[calc]", key);

    // Cache yoksa fonksiyonu çalıştır
    const result = fn(...args);

    // Sonucu cache'e yaz
    cache.set(key, result);

    return result;
  };
}


/*
-----------------------------------------------------------
4) Test 1 - Aynı input tekrar gelirse hesaplama yapmasın
-----------------------------------------------------------
*/

console.log("\n--- Test 1: Aynı input -> cache ---");

calcCount = 0;

const memoSquare = memoize(expensiveSquare);

console.log("result:", memoSquare(5)); // calc
console.log("result:", memoSquare(5)); // cache
console.log("result:", memoSquare(5)); // cache
console.log("calcCount (beklenen 1):", calcCount);


/*
-----------------------------------------------------------
5) Test 2 - Farklı input gelirse hesaplasın
-----------------------------------------------------------
*/

console.log("\n--- Test 2: Farklı input -> hesaplama ---");

calcCount = 0;

console.log("result:", memoSquare(5)); // calc
console.log("result:", memoSquare(6)); // calc (farklı input)
console.log("result:", memoSquare(5)); // cache
console.log("result:", memoSquare(6)); // cache
console.log("calcCount (beklenen 2):", calcCount);


/*
-----------------------------------------------------------
6) Multi-arg (çoklu parametre) testi
-----------------------------------------------------------
*/

console.log("\n--- Test 3: Çoklu parametre ---");

let addCount = 0;

function add(a, b) {
  addCount++;
  return a + b;
}

const memoAdd = memoize(add);

console.log("result:", memoAdd(1, 2)); // calc
console.log("result:", memoAdd(1, 2)); // cache
console.log("result:", memoAdd(2, 3)); // calc
console.log("result:", memoAdd(2, 3)); // cache
console.log("addCount (beklenen 2):", addCount);


/*
-----------------------------------------------------------
7) Ek Görev - Primitive vs Object Parametre Davranışı
-----------------------------------------------------------

Primitive (number/string/boolean...) -> değer kopyalanır
Object/Array/Function -> referans kopyalanır

Bu fark:
- Memoization'ın object parametrelerinde neden tricky olduğunu açıklar.
*/

console.log("\n--- Ek: Primitive vs Object davranışı ---");

// Primitive: değer kopyası (value copy)
let p1 = 10;
let p2 = p1;
p2 = 99;

console.log("Primitive p1:", p1); // 10
console.log("Primitive p2:", p2); // 99

// Object: referans kopyası (reference copy)
const o1 = { x: 1 };
const o2 = o1; // aynı referans
o2.x = 999;

console.log("Object o1:", o1); // { x: 999 }
console.log("Object o2:", o2); // { x: 999 }


/*
-----------------------------------------------------------
8) Object parametrelerde memoization problemi (referans eşitliği)
-----------------------------------------------------------

Aşağıdaki iki obje içerik olarak aynı görünüyor,
ama memory'de farklı referanslar olduğu için "aynı obje" sayılmaz.

{a:1,b:2} !== {a:1,b:2}

Eğer cache key olarak "objenin referansını" kullanırsan,
her seferinde farklı olduğu için cache işe yaramaz.

Biz burada JSON.stringify ile "içeriğe göre" key ürettiğimiz için
aynı içerik => aynı key => cache çalışır (çoğu basit senaryoda).
*/

console.log("\n--- Test 4: Object parametre ile memoization ---");

let sumCount = 0;

function sumObj(obj) {
  sumCount++;
  return obj.a + obj.b;
}

const memoSumObj = memoize(sumObj);

// İçerik aynı, ama iki farklı obje literal'i
console.log("result:", memoSumObj({ a: 1, b: 2 })); // calc
console.log("result:", memoSumObj({ a: 1, b: 2 })); // cache (JSON key aynıysa)
console.log("result:", memoSumObj({ a: 2, b: 3 })); // calc
console.log("result:", memoSumObj({ a: 2, b: 3 })); // cache

console.log("sumCount (beklenen 2):", sumCount);


/*
-----------------------------------------------------------
9) Dürüst notlar (gerçek dünyada dikkat)
-----------------------------------------------------------

1) Cache sınırsız büyürse RAM şişer.
   - Gerçek dünyada TTL veya LRU gibi stratejiler gerekir.

2) JSON.stringify her objede güvenli değil:
   - Circular reference patlatır
   - Function / Date / Map / Set gibi yapılar beklenmeyen sonuç verebilir
   - Property sırası bazı durumlarda farklı olabilir

3) Eğer "aynı referans" üzerinden cache yapmak istiyorsan:
   - WeakMap kullanılabilir (özellikle object key için)
   - Ama o zaman "aynı içerik farklı obje" cache hit olmaz.
*/