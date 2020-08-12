<?php

$number = (int) $_POST['number'];
if ($number <1 || $number >100 ) {
    die("Wrong putting data. Only numbers from 1 to 100");

}

$counter = 0;
do {
    $randnumber = rand(1,100);
    $counter++;
}
while ($number !== $randnumber);
echo ("I found $number from $counter attempts. Result is $randnumber");
