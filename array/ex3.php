<!--
Author: Khem Puthea
Email: puthea.khem@gmail.com

Write a program that prints the numbers from 1 to 100.
But for multiples of three print “Coca-Cola” instead of the
number and for the multiples of five print “IZE”. For
numbers which are multiples of both three and five print
“Sprite”. -->

<?php

$numbers = 1;

for($numbers = 1; $numbers <= 100; $numbers++) {
    if ($numbers % 3 == 0 ) {
        echo "Coca-Cola <br>";
    } elseif ($numbers % 5 == 0) {
        echo "IZE <br>";
    } elseif ($numbers % 3 == 0 && $numbers % 5 == 0) {
        echo "Sprite <br>";
    } else {
        echo $numbers . "<br>";
    }
}
