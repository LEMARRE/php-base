<?php

// echo date('l j F o\, \i\l \e\s\t h\hi \e\t s \s\e\c\o\n\d\e\s');

$seconds = date('s');

echo date ('l d F Y');
echo ', il est ';
echo date ('H\hi \e\t ');
echo $seconds . ' seconde';
echo ($seconds > 1) ? 's' : '';

echo '<hr/>';

// echo date ('\D\a\n\s \d\i\x \j\o\u\r\s\, \n\o\u\s \s\e\r\o\n\s \l\e l j F o', mktime(0, 0, 0, date("m")  , date("d")+10, date("Y")));

echo '<hr/>';

echo date('l d F Y', strtotime('+10 days'));
echo '<hr/>';

// Dans combien de jour Noël ?

$currentTimestamp = time();
$targetTimestamp = strtotime('25 December 2018');

echo ($targetTimestamp - $currentTimestamp) / 60 / 60 / 24;
$total = (($targetTimestamp - $currentTimestamp) / 60 / 60 / 24);
$days = round($total);
$hours = ($total - $days)*24;
echo $days;
echo '<hr/>';   
echo $hours;

// Dans combien de jour avant anniv' Belinda ?

// $currentTimestamp = time();
// $targetTimestamp = strtotime('21 October 2018');

// echo ($targetTimestamp - $currentTimestamp) / 60 / 60 / 24;

?>