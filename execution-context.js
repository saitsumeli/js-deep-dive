/* =========================================================
   1) CALL STACK (İç içe fonksiyon çağrıları)
   Amaç: "Çağrı aşağı iner, dönüş yukarı çıkar" mantığını görmek
   Beklenen çıktı sırası:
   1) f1 başladı
   2) f2 başladı
   3) f3 başladı
   4) f4 başladı
   f5 içindeyim
   5) f4 bitti
   6) f3 bitti
   7) f2 bitti
   8) f1 bitti
========================================================= */

function f1() {
  console.log("1) f1 başladı");
  f2(); // f1 burada durur, f2 çalışmaya başlar
  console.log("8) f1 bitti"); // f2 bittikten sonra buraya geri döner
}

function f2() {
  console.log("2) f2 başladı");
  f3();
  console.log("7) f2 bitti");
}

function f3() {
  console.log("3) f3 başladı");
  f4();
  console.log("6) f3 bitti");
}

function f4() {
  console.log("4) f4 başladı");
  f5();
  console.log("5) f4 bitti");
}

function f5() {
  console.log("f5 içindeyim"); // en dip: buradan sonra geri sarar (return)
}

f1();

/* =========================================================
   2) HOISTING - Function Declaration
   Amaç: Function declaration, çağrıdan önce çalışabilir
   Sebep: Memory phase'de fonksiyon gövdesi komple hazırlanır
========================================================= */

sayHi(); // çalışır

function sayHi() {
  console.log("Hi");
}

/* =========================================================
   3) HOISTING - var
   Amaç: var değişkeni memory phase'de "undefined" ile hazırlanır
   Yani: var a; (undefined) -> sonra a = 10
   Beklenen çıktı:
   undefined
   10
========================================================= */

console.log(a); // undefined (var hoisting)

var a = 10;

console.log(a); // 10

/* =========================================================
   4) let (TDZ - Temporal Dead Zone)
   Amaç: let/const hoist edilir ama initialize edilene kadar erişilemez
   Not: let b'yi tanımladıktan sonra kullanırsan sorun yok
========================================================= */

let b = 11;
console.log(b); // 11

/* =========================================================
   5) HOISTING - var + function expression (TypeError örneği)
   Amaç: "var foo" hoist edilir ama değeri undefined olur
   foo() çağrısında foo bir fonksiyon olmadığı için patlar
   Beklenen hata:
   TypeError: foo is not a function
========================================================= */

// foo(); // BUNU AÇARSAN HATA ALIRSIN (TypeError)

var foo = function () {
  console.log("foo");
};

// foo(); // Buraya alırsan çalışır (çünkü artık foo fonksiyon oldu)

/* =========================================================
   6) SHADOWING + HOISTING (var) -> undefined örneği
   Amaç: Fonksiyon içinde "var a" varsa, global a gölgelenir
   test() içinde var a, memory phase'de undefined olur.
   Bu yüzden console.log(a) global 1'i değil, local undefined'ı basar.
   Beklenen çıktı:
   undefined
========================================================= */

var a = 1;

function test() {
  // Bu fonksiyon aslında şöyle çalışır:
  // var a;          // hoisted (undefined)
  // console.log(a); // undefined
  // a = 2;

  console.log(a); // undefined (global 1 değil!)
  var a = 2;
}

test();
