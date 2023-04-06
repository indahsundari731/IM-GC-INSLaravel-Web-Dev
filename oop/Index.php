<?php

require_once('animal.php');
require_once('ape.php');
require_once('frog.php');

$hewan  = new animal("Shaun");
echo "Name :" . $hewan->name . "<br>";
echo "Legs :" . $hewan->legs . "<br>";
echo "cold blooded :" . $hewan->cold_blooded . "<br> <br>";

$Kodok  = new frog("Buduk");
echo "Name :" . $Kodok->name . "<br>";
echo "Legs :" . $Kodok->legs . "<br>";
echo "cold blooded :" . $Kodok->cold_blooded . "<br>";
echo "Yell :" . $Kodok->yell . "<br> <br>";

$sungokong = new ape("Kera Sakti");
echo "Name :" . $sungokong->name . "<br>";
echo "Legs :" . $sungokong->legs . "<br>";
echo "cold blooded :" . $sungokong->cold_blooded . "<br>";
echo "Yell :" . $sungokong->yell . "<br> <br>";


?>
