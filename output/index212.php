<?php
// output.php - Demonstration von PHP-Sprachkonstrukten und Ausgabemethoden

// Kommentar: Einfache Ausgabe mit echo
echo "Dies ist eine Ausgabe mit echo.<br>";

// Kommentar: Einfache Ausgabe mit print
print "Dies ist eine Ausgabe mit print.<br>";

// Kommentar: Heredoc-Syntax für komplexe Zeichenketten
$heredocText = <<<EOD
Dies ist ein Beispiel für die Heredoc-Syntax.
Es erlaubt mehrzeilige Textblöcke.
EOD;
echo $heredocText . "<br>";

// Kommentar: Nowdoc-Syntax für komplexe Zeichenketten
$nowdocText = <<<'EOD'
Dies ist ein Beispiel für die Nowdoc-Syntax.
Es erlaubt mehrzeilige Textblöcke.
EOD;
echo $nowdocText . "<br>";

// Kommentar: Formatierte Ausgabe mit printf
$number = 42;
printf("Die Antwort auf alle Fragen ist %d.<br>", $number);

// Kommentar: Ausgabe von Arrays mit print_r
$array = array("Apfel", "Banane", "Kirsche");
echo "Array-Ausgabe mit print_r:<br>";
print_r($array);
echo "<br>";

// Kommentar: Ausgabe von Variableninformationen mit var_dump
echo "Variableninformationen mit var_dump:<br>";
var_dump($array);
echo "<br>";

// Kommentar: Ausgabe von Variableninformationen mit var_export
echo "Variableninformationen mit var_export:<br>";
var_export($array);
echo "<br>";
?>