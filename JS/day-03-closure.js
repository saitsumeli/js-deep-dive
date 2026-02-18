// ==============================
// DAY 3 — CLOSURE
// ==============================



// --------------------------------
// 1) Closure nedir? (Temel Örnek)
// --------------------------------

function outer() {
  let x = 10; // outer'ın local değişkeni

  function inner() {
    console.log(x); // inner, outer'ın x değişkenine erişiyor
  }

  return inner; // inner dışarı dönüyor → closure oluşuyor
}

const fn = outer(); // outer çalıştı, x oluşturuldu
fn(); // 10 → outer bitmesine rağmen x memory'de



// --------------------------------
// 2) Değer kopyalanmıyor (Referans)
// --------------------------------

function outer2() {
  let x = 1;

  return function () {
    x++;              // aynı x üzerinde işlem yapılıyor
    console.log(x);
  };
}

const f = outer2();

f(); // 2
f(); // 3
f(); // 4
// Eğer kopyalansaydı hep 2 olurdu
// Ama aynı lexical environment yaşıyor



// --------------------------------
// 3) Counter Closure
// --------------------------------

function createCounter(start = 0) {
  let count = start; // private state

  return function () {
    count++;         // closure sayesinde state korunur
    return count;
  };
}

const c1 = createCounter();
console.log(c1()); // 1
console.log(c1()); // 2

const c2 = createCounter();
console.log(c2()); // 1 (ayrı environment)
console.log(c1()); // 3 (c1 kendi state'ine devam eder)



// --------------------------------
// 4) Private Variable Pattern
// --------------------------------

function createBankAccount(initialBalance = 0) {
  let balance = initialBalance; // dışarıdan erişilemez

  return {
    deposit(amount) {
      if (amount <= 0) return balance;
      balance += amount;
      return balance;
    },

    withdraw(amount) {
      if (amount <= 0 || amount > balance) return balance;
      balance -= amount;
      return balance;
    },

    getBalance() {
      return balance; // closure ile erişiliyor
    }
  };
}

const acc = createBankAccount(100);

console.log(acc.getBalance()); // 100
console.log(acc.deposit(50));  // 150
console.log(acc.withdraw(70)); // 80

console.log(acc.balance); // undefined → private



// --------------------------------
// 5) Factory Function + Closure
// --------------------------------

function createUser(name) {
  let loginCount = 0; // private state

  return {
    name,

    login() {
      loginCount++; // closure ile artıyor
      return `${name} logged in (${loginCount})`;
    },

    getLoginCount() {
      return loginCount;
    }
  };
}

const u1 = createUser("Sait");
const u2 = createUser("Ayşe");

console.log(u1.login()); // Sait logged in (1)
console.log(u1.login()); // Sait logged in (2)
console.log(u2.login()); // Ayşe logged in (1)



// --------------------------------
// 6) Multiple Instance Test
// --------------------------------

function build() {
  let x = 0;

  return {
    inc() { x++; },         // aynı x referansı
    print() { console.log(x); }
  };
}

const a = build();
const b = build();

a.inc();
a.inc();
b.inc();

a.print(); // 2
b.print(); // 1

// Her build() çağrısı ayrı lexical environment oluşturur
// Bu yüzden a ve b'nin x değerleri birbirinden bağımsızdır
