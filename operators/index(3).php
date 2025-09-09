<?php
// operators.php - Demonstration der Verwendung von Operatoren in PHP

// Mathematische (Arithmetische) Operatoren
$a = 10;
$b = 3;
echo "Addition: " . ($a + $b) . "<br>";          // 13
echo "Subtraktion: " . ($a - $b) . "<br>";       // 7
echo "Multiplikation: " . ($a * $b) . "<br>";    // 30
echo "Division: " . ($a / $b) . "<br>";          // 3.333333
echo "Modulo: " . ($a % $b) . "<br>";            // 1

// Kurzformen von mathematischen Operatoren
$a += 2; // $a = $a + 2
echo "Kurzform Addition: " . $a . "<br>";        // 12

$a -= 2; // $a = $a - 2
echo "Kurzform Subtraktion: " . $a . "<br>";     // 10

$a *= 2; // $a = $a * 2
echo "Kurzform Multiplikation: " . $a . "<br>";  // 20

$a /= 2; // $a = $a / 2
echo "Kurzform Division: " . $a . "<br>";        // 10

$a %= 3; // $a = $a % 3
echo "Kurzform Modulo: " . $a . "<br>";          // 1

// Inkrement und Dekrement
$c = 5;
echo "Vor-Inkrement: " . ++$c . "<br>";          // 6
echo "Nach-Inkrement: " . $c++ . "<br>";         // 6
echo "Nach-Inkrement-Wert: " . $c . "<br>";      // 7

echo "Vor-Dekrement: " . --$c . "<br>";          // 6
echo "Nach-Dekrement: " . $c-- . "<br>";         // 6
echo "Nach-Dekrement-Wert: " . $c . "<br>";      // 5

// Exponential-Operator
$d = 2;
echo "Exponential-Operator: " . ($d ** 3) . "<br>"; // 8

// Verkettungsoperator (Konkatenation)
$str1 = "Hallo";
$str2 = "Welt";
echo "Verkettung: " . $str1 . " " . $str2 . "<br>"; // Hallo Welt

$str1 .= " PHP";
echo "Kurzform Verkettung: " . $str1 . "<br>";    // Hallo PHP

// Vergleichsoperatoren
$e = 5;
$f = 5;
$g = "5";
echo "Gleich: " . var_export($e == $f, true) . "<br>";    // true
echo "Identisch: " . var_export($e === $g, true) . "<br>"; // false
echo "Ungleich: " . var_export($e != $g, true) . "<br>";  // false
echo "Nicht identisch: " . var_export($e !== $g, true) . "<br>"; // true

// Ternärer Operator
$age = 18;
echo "Ternärer Operator: " . ($age >= 18 ? "Erwachsen" : "Nicht erwachsen") . "<br>"; // Erwachsen

// Null-Coalescing-Operator
$undefinedVar = null;
echo "Null-Coalescing-Operator: " . ($undefinedVar ?? "Standardwert") . "<br>"; // Standardwert

// Spaceship-Operator
$h = 10;
$i = 20;
echo "Spaceship-Operator: " . ($h <=> $i) . "<br>"; // -1

// Logische Operatoren
$bool1 = true;
$bool2 = false;
echo "Logisches UND: " . var_export($bool1 && $bool2, true) . "<br>"; // false
echo "Logisches ODER: " . var_export($bool1 || $bool2, true) . "<br>"; // true
echo "Logisches NICHT: " . var_export(!$bool1, true) . "<br>";        // false

// Short-circuit-evaluation
echo "Kurzschlussauswertung: " . ($undefinedVar && false) . "<br>"; // false
