<?php

require_once 'Frog.php';
require_once 'Ape.php';

// Instance dari class Animal
$sheep = new Animal("shaun");
echo "name : " . $sheep->get_name() . "<br>";
echo "legs : " . $sheep->get_legs() . "<br>";
echo "cold blooded : " . $sheep->get_cold_blooded() . "<br>";


// Instance dari class Ape
$kera = new Ape("kera sakti");
echo "name : " . $kera->get_name() . "<br>";
echo "legs : " . $kera->get_legs() . "<br>";
echo "cold blooded : " . $kera->get_cold_blooded() . "<br>";
echo "yell : "; $kera->yell(). "<br>";

// Instance dari class Frog
$kodok = new Frog("buduk");
echo "name : " . $kodok->get_name() . "<br>";
echo "legs : " . $kodok->get_legs() . "<br>";
echo "cold blooded : " . $kodok->get_cold_blooded() . "<br>";
echo "jump : "; $kodok->jump(). "<br>";
?>
