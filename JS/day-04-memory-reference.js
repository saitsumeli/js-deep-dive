/***********************
 * THURSDAY — Memory & Reference (Sait)
 * Amaç: “Ben JS motoruyum” gibi düşünebilmek
 ***********************/

/* 1) Primitive vs Reference */
console.log("Script başladı");
console.log("\n1 Primitive vs Reference" );

let p1 = 5;
let p2 = p1;

p2 = 99;

console.log("p1:", p1); // 5
console.log("p2:", p2); // 99

const r1 = { a: 1 };
const r2 = r1;      // referans kopyası
r2.a = 777;

console.log("r1.a:", r1.a); // 777
console.log("r2.a:", r2.a); // 777

/* 2) Equality: === primitive vs object */
console.log("\n2) Equality (===)");

console.log(5 === 5);

const o1 = {x:1};
const o2 = {x:1};
const o3=o1;

console.log("o1 === o2:", o1 === o2); // farklı referans false
console.log("o1 === o3:", o1 === o3); // aynı referans true

/* 3) “const” yanılgısı */

console.log("\n3) const yanılgısı");

const box = { value: 10};

box.value = 20; // ✅ mümkündür (objenin içi değişebilir)
// box = { value: 30 }; // ❌ TypeError (referansı yeniden atayamazsın)

console.log("box.value:", box.value); //20

/* 4) Shallow copy tuzağı */
console.log("\n4) Shallow copy tuzağı");

const original = {
    name : "sait",
    meta : { level : "mid", tags: ["js", "deep-dive"]}
};

const shallow = {...original}; // 1 katman kopya
shallow.meta.level = "senior"; // içte aynı referans 
shallow.meta.tags.push("closure");

console.log("original.meta.level:", original.meta.level); // "senior" ❌
console.log("original.meta.tags:", original.meta.tags);   // push etkiler ❌

/* 5) Deep copy: structuredClone varsa en temiz */
console.log("\n5) Deep copy (structuredClone vs custom)");

/**
 * NOT: structuredClone:
 * - modern ortamlarda var
 * - Date, Map, Set, ArrayBuffer vb. bir sürü şeyi doğru kopyalar
 * - function kopyalamaz (zaten mantıksız)
 */

const deep1 = typeof structuredClone === "function"
  ? structuredClone(original)
  : null;

if (deep1) {
  deep1.meta.level = "legend";
  deep1.meta.tags.push("reference");

  console.log("original.meta.level:", original.meta.level); // "senior" (değişmez artık)
  console.log("deep1.meta.level:", deep1.meta.level);       // "legend"
}
