<?php
$weekdays = [
  "Monday"    => "Montag",
  "Tuesday"   => "Dienstag",
  "Wednesday" => "Mittwoch",
  "Thursday"  => "Donnerstag",
  "Friday"    => "Freitag",
  "Saturday"  => "Samstag",
  "Sunday"    => "Sonntag"
];

$months = [
  "January"   => "Januar",
  "February"  => "Februar",
  "March"     => "März",
  "April"     => "April",
  "May"       => "Mai",
  "June"      => "Juni",
  "July"      => "Juli",
  "August"    => "August",
  "September" => "September",
  "October"   => "Oktober",
  "November"  => "November",
  "December"  => "Dezember"
];

$time = new DateTime();

$weekday = $weekdays[$time->format("l")];
$month = $months[$time->format("F")];
$year = $time->format("Y");
$day = $time->format("d");

// Ausgabe
echo "$weekday, $day. $month $year";
