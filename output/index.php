<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Output</title>
</head>

<body>
  <?php
  // echo
  echo "hi.   moinsen
    <br>
    hi";

  // print - 1 for succes
  $value = print "<br> hello: ";
  echo $value;

  // heredoc
  $text = <<<TEXT
    <br>
    Output output   "output: $value"
  TEXT;
  echo $text;

  // nowdoc
  $text2 = <<<'SOMETHING'
    <br>
    Output output   "output: $value"
  SOMETHING;
  echo $text2;

  // printf
  printf("<br> Hello my name is %s and I have %d %s<br>", "Lu", $value, "lessons");

  // print_r
  $array = ["Jonas", "Herbert", 1, true, [1, 2, 3]];
  print_r($array);

  // var_dump
  echo "<br>";
  var_dump($array);

  // var_export
  echo "<br>";
  var_export($array);
  $export = var_export($array, true);
  echo "<br>";
  echo $export;


  echo "<br>";
  echo "<br>";


  // exercise

  echo "echo<br>";

  print "Moinsen<br>";

  $name = "Lu";
  echo <<<TEXT
  "Hello World,
  Hello $name"<br>
  TEXT;

  echo <<<'TEXT'
  "Hello World, 
  Hello $Lu$"<br>
  TEXT;

  printf("Hello %s, you have to sell %d apples<br>", $name, 2);

  $arr1 = [1, "apple", [1, 2, true]];
  print_r($arr1);
  echo "<br>";

  var_dump($arr1);
  echo "<br>";

  var_export($arr1);
  echo "<br>";
  ?>


</body>

</html>