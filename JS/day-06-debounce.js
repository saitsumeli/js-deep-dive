/*
===========================================================
Day 06 - Debounce (JS Deep Dive - Sait)
===========================================================

Hedef:
- debounce mantığını engine gibi düşünerek anlamak
- clearTimeout + setTimeout ilişkisini kavramak
- Closure'ın burada nasıl state tuttuğunu görmek
- 10 tetikleme → sadece sonuncusu çalışsın testini yapmak

Bugün ezber yok.
Simülasyon var.
*/


/*
-----------------------------------------------------------
1) Debounce Nedir?
-----------------------------------------------------------

Debounce:

Bir fonksiyon hızlı hızlı tetikleniyorsa,
her tetiklemede çalıştırmak yerine,
"en son çağrıyı" belirli bir süre sonra çalıştırır.

Önemli nokta:
- Süre dolmadan tekrar çağrı gelirse
  → önceki timer iptal edilir.
- Süre dolarsa
  → fonksiyon çalışır.

Yani mantık:

Tetikleme → Bekle → Eğer arada tekrar tetikleme gelirse resetle.
*/


/*
-----------------------------------------------------------
2) Temel debounce implementasyonu
-----------------------------------------------------------
*/

function debounce(fn, delay) {

  // timerId burada tanımlanıyor.
  // Neden burada?
  // Çünkü closure içinde kalmasını istiyoruz.
  // Her çağrıda sıfırlanmasın, state korunsun.
  let timerId;

  // debounce bize yeni bir fonksiyon döndürür.
  // Asıl kontrol burada yapılır.
  return function (...args) {

    /*
    Eğer daha önce kurulmuş bir timer varsa
    onu iptal ediyoruz.

    Bu satır debounce'ın kalbidir.
    */
    clearTimeout(timerId);

    /*
    Yeni bir timer kuruyoruz.
    delay süresi dolarsa fn çalışacak.
    */
    timerId = setTimeout(() => {
      fn(...args);
    }, delay);
  };
}


/*
-----------------------------------------------------------
3) Test Altyapısı
-----------------------------------------------------------
*/

// Kaç kere gerçekten çalıştığını görmek için sayaç
let realCallCount = 0;

function expensiveOperation() {
  realCallCount++;
  console.log("Gerçekten çalıştı:", realCallCount);
}


/*
-----------------------------------------------------------
4) Debounced Versiyon
-----------------------------------------------------------
*/

const debouncedOperation = debounce(expensiveOperation, 1000);


/*
-----------------------------------------------------------
5) 10 Kez Hızlı Tetikleme Testi
-----------------------------------------------------------

Beklenen:

1 saniye sonra
→ sadece 1 kere çalışmalı

Çünkü her tetiklemede önceki timer iptal ediliyor.
*/

for (let i = 0; i < 10; i++) {
  debouncedOperation();
}


/*
-----------------------------------------------------------
6) Argüman Testi
-----------------------------------------------------------

Şimdi parametreli test yapalım.
Son gönderilen argüman çalışmalı.
*/

function printValue(value) {
  console.log("Son değer:", value);
}

const debouncedPrint = debounce(printValue, 1000);

debouncedPrint(1);
debouncedPrint(2);
debouncedPrint(3);

// Beklenen:
// 1 saniye sonra → "Son değer: 3"


/*
-----------------------------------------------------------
7) Engine Simülasyonu (Zihinsel Model)
-----------------------------------------------------------

Her çağrıda:

1) clearTimeout(timerId)
2) yeni timer kuruluyor
3) timerId güncelleniyor

10 çağrı gelirse:

Call1 → timer1 kuruldu
Call2 → timer1 iptal, timer2 kuruldu
Call3 → timer2 iptal, timer3 kuruldu
...
Call10 → timer9 iptal, timer10 kuruldu

Sonunda sadece timer10 kalır.
Delay dolunca sadece o çalışır.
*/


/*
-----------------------------------------------------------
8) KRİTİK SORU (Kendi Kendine Cevapla)
-----------------------------------------------------------

Eğer timerId'yi return edilen fonksiyonun içinde
tanımlasaydık ne olurdu?

Örneğin:

return function() {
  let timerId;
  ...
}

Cevap:
Her çağrıda yeni timerId oluşurdu.
Önceki timer'a erişim kaybolurdu.
clearTimeout çalışmazdı.
Debounce bozulurdu.

Yani closure burada zorunludur.
*/


/*
-----------------------------------------------------------
9) Debounce'ın Gerçek Dünya Kullanımı
-----------------------------------------------------------

- Search input (API spam önleme)
- Window resize
- Scroll event
- Button double-click önleme

Temel amaç:
Gereksiz tekrarları engellemek.
Performansı korumak.
*/


/*
-----------------------------------------------------------
Day 06 Notu (Kendi Özetin)
-----------------------------------------------------------

Debounce:
- State tutar (timerId)
- Closure kullanır
- Her çağrıda önceki timer'ı iptal eder
- Sadece son çağrı çalışır
- delay boyunca "sessizlik" bekler

Throttle ile karıştırma.
Throttle → belirli aralıkta çalıştırır.
Debounce → sonuncuyu çalıştırır.
*/