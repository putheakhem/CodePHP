
<!--
Author: Khem Puthea
Email: puthea.khem@gmail.com

Store these colors in array: 'red', 'green', 'blue', 'yellow', 'purple'
as $colors then update your list of colors to be sorted in alphabetical order.
-->


<?php

$colors = array(
    "red",
    "green",
    "blue",
    "yellow",
    "purple",
);
echo "<h4>before sort </h4>";

$arraylength = count($colors);
for($x = 0; $x < $arraylength; $x++) {
    echo $colors[$x] . "<br>";
}

sort($colors);

echo "<h4>After sort </h4>";

$arraySortLength = count($colors);
for($x = 0; $x < $arraySortLength; $x++) {
    echo $colors[$x] . "<br>";
}