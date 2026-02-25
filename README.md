JS Deep Dive (Sait)

This repository documents my structured JavaScript deep-dive journey.

The goal is not to “know JavaScript”.

The goal is to reason about JavaScript like the engine does.

Every topic ends with:

A mental model

A simulation

A coded implementation

A verification test

A written note

If I cannot predict the output before running it, I don’t understand it yet.

Philosophy

I don’t memorize behavior.
I simulate the engine.

JavaScript is deterministic.
If I can’t predict it, I haven’t modeled it correctly.

Core Mental Models

Execution Context (Global + Function)

Creation Phase vs Execution Phase

Memory Allocation Model

Scope Chain (inside → outside resolution)

Hoisting mechanics (var / let / const / function)

TDZ behavior

Shadowing

Closure (environment reference, not value copy)

Primitive vs Reference behavior

Call Stack transitions

Sync vs Async mental separation

Cache logic (Memoization)

Referential equality vs structural equality

Structure

Each day contains:

📄 Explanation file

🧠 Engine simulation notes

🧪 Output prediction exercises

🧩 Implementation challenge

🔬 Edge-case exploration

Session Log
Session 1 – Execution Context & Scope

Covered:

Call Stack deep dive

Creation phase modeling

Hoisting mechanics

TDZ behavior

Shadowing edge cases

Closure mental model

Pre vs Post increment reasoning

Outcome:
Able to predict output of nested scope problems without running code.

Session 2 – Scope Chain Deep Simulation

Covered:

Lexical environment linking

Scope resolution order

Variable lookup tracing

Function execution layering

Outcome:
Can trace identifier lookup path manually.

Session 3 – Closure & Memory Retention

Covered:

Closure creation timing

Environment record persistence

Private variable pattern

Factory function reasoning

Outcome:
Understand why closure stores references, not copied values.

Session 4 – Memory & Reference

Covered:

Primitive vs reference

Stack vs heap conceptual model

Shallow copy vs deep copy

Object mutation behavior

Outcome:
Can predict mutation side-effects before running code.

Session 5 – Memoization & Cache Logic

Covered:

Cache mental model

Wrapper function pattern

Single vs multi-argument memoization

Primitive vs object parameter behavior

JSON.stringify key strategy

Map vs Object cache difference

Referential equality pitfalls

Memory growth risks

Outcome:
Able to implement memoize(fn) from scratch and explain limitations.

Engine Simulation Template

For every new topic I simulate:

1) Creation Phase

Global Memory:

Function Memory:

Variable Allocation:

TDZ variables:

2) Execution Phase

Line-by-line evaluation

Scope resolution path

Call stack transitions

Mutation tracking

Discipline Rule

Before running code:

Predict output

Simulate memory

Trace scope chain

Only then execute

If prediction ≠ output → revisit mental model.

Next Focus

Event Loop Deep Dive

Microtask vs Macrotask ordering

Promise resolution timing

Async stack reasoning

WeakMap vs Map (advanced cache patterns)

Engine-level performance thinking