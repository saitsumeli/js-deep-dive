# JS Deep Dive (Sait)

This repo is my structured JavaScript deep-dive journey.  
Goal: build rock-solid fundamentals + modern JS fluency by shipping small, focused exercises and mini-projects.

## Why this exists
- I don’t want “I know JS” level.
- I want “I can reason about JS” level.
- Every topic ends with code, notes, and a small deliverable.

## Structure

## Core Mental Models

I don’t memorize behavior.
I simulate the engine.

- Execution Context (Global + Function)
- Memory Phase vs Execution Phase
- Scope Chain (inside → outside)
- Hoisting differences (var / let / function)
- Shadowing
- Closure (environment reference, not value copy)
- Pre vs Post increment reasoning

## Session Log

### Session 1 – Execution Context & Scope

Covered:
- Call Stack deep dive
- Hoisting mechanics
- TDZ behavior
- Shadowing edge cases
- Closure mental model
- Increment operator behavior simulation

Outcome:
Able to predict output of nested scope problems without running code.

If I cannot predict the output before running it, I don’t understand it yet.

## Engine Simulation Notes

For every session, I write:

1. Creation Phase (Memory Allocation)
   - Variables:
   - Functions:
   - TDZ:

2. Execution Phase
   - Line-by-line evaluation
   - Scope lookup path
   - Call stack transitions
