<?php
$date1 = new DateTime('12-08-2014 13:07:09');
// $date1 = new DateTime('12-08-2014 11:08:47');
$date2 = new DateTime('01-01-2015 00:00:00');

$diff = $date2->diff($date1);
$hours = $diff->h;
$hours = $hours + ($diff->days*24);
$minutes = $diff->i + $hours*60;
$seconds = $diff->s + $minutes*60;

echo $diff->format('%a Day and %h hours');
echo 'Hours until new year : ' . $hours . "\n";
echo 'Minutes until new year : ' . $minutes . "\n";
echo 'Seconds until new year : ' . $seconds . "\n";
echo 'Days:Hours:Minutes:Seconds ' . $diff->format('%a') . ':' . $diff->format('%h') . ':' . $diff->format('%i') . ':' . $diff->format('%s') ."\n";
?>