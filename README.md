# PHP strpos() Type Juggling Issue

This repository demonstrates a subtle bug in PHP code involving the `strpos()` function and type juggling.  The `strpos()` function returns `false` if the needle is not found, but this `false` evaluates to 0 in a boolean context. This leads to incorrect logic when checking if a needle exists at the beginning of a string.

The `bug.php` file contains the erroneous code.  `bugSolution.php` provides the corrected version.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output.
4. Run `bugSolution.php` to see the corrected behavior.