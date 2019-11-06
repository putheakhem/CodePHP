<!--
Author: Khem Puthea
Email: puthea.khem@gmail.com

Create another array of colors:
"red", "green", "blue", "yellow", "brown", "orange"
as $new_color. Create a new array that contains only the
items from $colors that are available as new_color’s.

-->

<?php

$new_color = ["red", "green", "blue", "yellow", "brown", "orange"];

$colors = array(
    "red",
    "green",
    "blue",
    "yellow",
    "purple",
);


$colors_new_color = array();
$length_new_colors = count($new_color);
$length_colors = count($colors);
for ($i = 0; $i < $length_colors; $i++ ) {
    for ($j = 0; $j < $length_new_colors; $j++ ) {
        if( $colors [$i] == $new_color[$j]) {
            array_push($colors_new_color, $colors[$i]);
        }
    }
}

print_r($colors_new_color);
