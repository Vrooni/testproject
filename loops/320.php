<?php
for ($i = 0; $i < 10; $i++) {
  if ($i === 5) {
    break;
  }
  echo $i;
}

echo "<br>";
for ($i = 0; $i < 10; $i++) {
  if ($i === 5) {
    continue;
  }
  echo $i;
}
