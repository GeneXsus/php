<?php
//  Write a PHP script to calculate and display average temperature, five lowest
//  and highest temperatures.
//  Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
//  73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
//  Expected Output :
//  Average Temperature is : 69.77
//  List of five lowest temperatures : 60, 62, 63, 64, 65
//  List of five highest temperatures : 75, 76,78, 79, 85 
$a_temperatiras= [ 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
];

asort($a_temperatiras);

$minimas = array_slice($a_temperatiras, 0,5); 
$maxima = array_slice($a_temperatiras, -5,5); 
print("average temperature is: ".(array_sum($a_temperatiras)/count($a_temperatiras))."<br>");
print("List of give lowest temperatires: ".implode(", ", $minimas)."<br>");
print("List of give highest temperatires: ".implode(", ", $maxima)."<br>");
?>