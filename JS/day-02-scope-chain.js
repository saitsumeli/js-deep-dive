/**
 * day-02-scope-chain.js
 * Konu: Lexical scope, scope chain, variable lookup, block vs function scope
 * Hedef: ÇIKTILARI çalıştırmadan önce tahmin edebilmek ve "neden"ini scope zinciriyle açıklamak.
 *
 * Not:
 * - "En yakındaki binding kazanır" (shadowing)
 * - Arama sırası: current scope -> outer -> ... -> global -> (yoksa) ReferenceError
 * - var = function-scoped, let/const = block-scoped
 */

/* =========================
   Test A — Variable lookup: “en yakını kazanır”
   ========================= */
console.log("\n=== Test A ===");

const A_x = "global";

function A_outer() {
  const A_x = "outer";

  function A_inner() {
    const A_x = "inner";
    console.log("A1:", A_x); // inner scope'ta A_x var -> "inner"
  }

  A_inner();
}

A_outer();
console.log("A2:", A_x); // global scope'taki A_x -> "global"

/* =========================
   Test B — Inner, outer’ı görür; outer inner’ı göremez
   ========================= */
console.log("\n=== Test B ===");

function B_outer() {
  const secret = 42;

  function B_inner() {
    console.log("B1:", secret); // inner, outer scope'a erişebilir (scope chain)
  }

  B_inner();
}

B_outer();

// Aşağıyı açarsan ReferenceError: secret is not defined
// Çünkü global scope chain içinde secret yok.
// console.log("B2:", secret);

/* =========================
   Test C — Shadowing tuzağı (block içi dışarıyı etkilemez)
   ========================= */
console.log("\n=== Test C ===");

let C_name = "global";

function C_f() {
  // Bu satırı açarsan, function scope içinde C_name "local" olur ve globali shadow eder.
  // let C_name = "local";

  console.log("C1:", C_name); // "global" veya "local" (yukarıya bağlı)

  if (true) {
    let C_name = "block";
    console.log("C2:", C_name); // block scope -> "block"
  }

  console.log("C3:", C_name); // block'taki let dışarı taşmaz -> C1 ile aynı
}

C_f();

/* =========================
   Test D — var sızar, let/const sızmaz
   ========================= */
console.log("\n=== Test D ===");

function D_test() {
  if (true) {
    var a = 1; // function-scoped (D_test içinde her yerden görünür)
    let b = 2; // block-scoped (sadece if bloğu içinde)
    const c = 3; // block-scoped (sadece if bloğu içinde)

    console.log("D0 (inside block):", a, b, c); // 1 2 3
  }

  console.log("D1 a:", a); // 1

  // Aşağıları açarsan ReferenceError alırsın (b/c block scope'ta kaldı)
  // console.log("D2 b:", b);
  // console.log("D3 c:", c);
}

D_test();

/* =========================
   Test E — Loop closure bug: var vs let
   ========================= */
console.log("\n=== Test E ===");

// var: i tek binding (function/global scope) -> timeout çalıştığında i çoktan 3 olmuştur
for (var i = 0; i < 3; i++) {
  setTimeout(() => console.log("E var:", i), 0); // büyük ihtimalle 3,3,3
}

// let: her turda yeni binding -> 0,1,2 beklenir
for (let j = 0; j < 3; j++) {
  setTimeout(() => console.log("E let:", j), 0); // 0,1,2
}

/* =========================
   Test F — Mini Scope Chain Challenge (lexical’e göre çöz)
   ========================= */
console.log("\n=== Test F ===");

const F_a = "G";

function F_one() {
  const F_a = "1";
  F_two();

  function F_two() {
    // Burada "a" araması: F_two scope -> F_one scope -> global
    // F_one içinde F_a bulunduğu için "1"
    console.log("F1:", F_a);
  }
}

F_one();

/* =========================================================
   Kendi yazdığın 2 test (İSTENEN TESLİM)
   1) Shadowing testi
   2) var loop bug + fix
   ========================================================= */

/* =========================
   Custom 1 — Shadowing (aynı isim farklı scope)
   ========================= */
console.log("\n=== Custom 1 (Shadowing) ===");

const S = "global-S";

function shadow_outer() {
  const S = "outer-S";

  function shadow_inner() {
    // Burada S araması: shadow_inner -> shadow_outer -> global
    console.log("S1:", S); // "outer-S"
  }

  shadow_inner();

  if (true) {
    const S = "block-S";
    console.log("S2:", S); // "block-S" (block içi shadowing)
  }

  console.log("S3:", S); // "outer-S" (block bitti, outer devam)
}

shadow_outer();
console.log("S4:", S); // "global-S"

/* =========================
   Custom 2 — var loop bug + fix
   ========================= */
console.log("\n=== Custom 2 (var loop bug + fix) ===");

// BUG: var ile aynı i paylaşılır
for (var k = 0; k < 3; k++) {
  setTimeout(() => console.log("BUG var k:", k), 0); // 3,3,3
}

// FIX #1: let kullan
for (let m = 0; m < 3; m++) {
  setTimeout(() => console.log("FIX let m:", m), 0); // 0,1,2
}

// FIX #2: IIFE ile her turda yeni scope oluştur (eski tarz ama mantığı öğretir)
for (var n = 0; n < 3; n++) {
  (function (capturedN) {
    setTimeout(() => console.log("FIX IIFE n:", capturedN), 0); // 0,1,2
  })(n);
}

/* =========================
   Ek: ReferenceError vs undefined (kafa karıştıran ayrım)
   ========================= */
console.log("\n=== Extra (ReferenceError vs undefined) ===");

// "undeclaredVar" hiç tanımlı değil -> ReferenceError
// console.log(undeclaredVar);

// "declaredButUndefined" tanımlı ama değer atanmamış -> undefined
let declaredButUndefined;
console.log("Extra:", declaredButUndefined); // undefined
