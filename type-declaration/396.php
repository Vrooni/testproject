<?php
// a function, which never ends
function exitProgram(): never
{
  echo "Programm exit";
  exit;
  // or throw Exception
  // throw new Exception("HI");
}

exitProgram();
echo "Never!";
