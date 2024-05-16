<?php

require_once 'Frog.php';
require_once 'Ape.php';

// Instance dari class Animal
$sheep = new Animal("shaun");
echo "name : " . $sheep->get_name() . "<br>";
echo "legs : " . $sheep->get_legs() . "<br>";
echo "cold blooded : " . $sheep->get_cold_blooded() . "<br>";


// Instance dari class Ape
$sungokong = new Ape("kera sakti");
echo "name : " . $sungokong->get_name() . "<br>";
echo "legs : " . $sungokong->get_legs() . "<br>";
echo "cold blooded : " . $sungokong->get_cold_blooded() . "<br>";
echo "yell : "; $sungokong->yell(). "<br>";

// Instance dari class Frog
$kodok = new Frog("buduk");
echo "name : " . $kodok->get_name() . "<br>";
echo "legs : " . $kodok->get_legs() . "<br>";
echo "cold blooded : " . $kodok->get_cold_blooded() . "<br>";
echo "jump : "; $kodok->jump(). "<br>";
?>
