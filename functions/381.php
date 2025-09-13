<?php
// global variable - everywhere available (exception: functions)
$global = "Global";

function local()
{
  // local variable - only available in scope
  $local = "Local";

  // you can get global variables in functions
  global $global;
  echo $global;
}

// you cannot get local variables outside of functions
echo $local;
?>

<?php
local();
echo $global;
?>