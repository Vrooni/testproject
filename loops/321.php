<?php
for ($i = 1; $i <= 10; $i++) {
  if ($i === 5) {
    continue;
  }

  echo $i . " ";
}

echo "<br>";
$i = 100;
while ($i >= 1) {
  echo $i . " ";
  $i /= 2;
}

echo "<br>";
$i = 10;
do {
  echo $i . " ";
  $i--;
} while ($i > 0);

for ($i = 1; $i <= 20; $i++) {
  if ($i > 15) {
    break;
  }

  if ($i % 2 !== 0) {
    continue;
  }
}
