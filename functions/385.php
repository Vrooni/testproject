<?php
function counts($start, $end)
{
  echo "$start<br>";

  if ($start >= $end) {
    return;
  }

  counts($start + 1, $end);
  echo "End of: $start<br>";
}

counts(1, 10);
