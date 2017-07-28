<?php

$date = new DateTime;

echo '<pre>', print_r($date), '<br><br>';

echo "Formated: {$date->format('l / d F / o / G:i:s')}";
echo '<br><br>';

echo "Timestamp: {$date->getTimestamp()}";
echo '<br><br>';

print_r($date->getTimezone());
echo '<br><br>';

echo "Timeszone Name: {$date->getTimezone()->getName()}";
echo '<br><br>';

$date = DateTime::createFromFormat('j/M/Y/G:i:s', '15/Feb/2009/22:12:54');
var_dump($date);
echo '<br><br>';
echo "Formated: {$date->format('l / d F / o / G:i:s')}";
echo '<br><br>';

$date = (new DateTime)->setTimestamp(60);
var_dump($date);
echo '<br><br>';
echo "Formated: {$date->format('l / d F / o / G:i:s')}";
echo '<br><br>';

$date = (new DateTime)->setDate(1980, 5, 3)->setTime(5, 0, 0);
var_dump($date);
echo '<br><br>';
echo "Formated: {$date->format('l / d F / o / G:i:s')}";
echo '<br><br>';
