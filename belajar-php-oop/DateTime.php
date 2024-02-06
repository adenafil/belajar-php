<?php

$date = new DateTime();
$date->setDate(2024, 02, 07);
$date->setTime(16, 05, 12);

$date->add(new DateInterval("P1Y"));

$dateInterval = new DateInterval("P2M");
$dateInterval->invert = 1;

$date->add($dateInterval);

var_dump($date);

# DateTimeZone

$newDate = new DateTime();
$newDate->setTimezone(new DateTimeZone("Asia/Makassar"));

var_dump($newDate);

#FormatDateTime

$formatDate = new DateTime();
$formatDate->setTimezone(new DateTimeZone("Asia/Makassar"));

echo $formatDate->format("Y-m-d H:i:s") . PHP_EOL;

# Parse DateTime

$inputDateUser = DateTime::createFromFormat(
    "Y-m-d H:i:s", "2004-2-3 10:10:10", new DateTimeZone("Asia/Jakarta")
);


var_dump($inputDateUser);