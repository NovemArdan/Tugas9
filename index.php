<?php

require_once 'animal.php';

// Membuat instance dari class Animal
$sheep = new Animal("shaun");

// Menampilkan properti
echo $sheep->name; // "shaun"
echo $sheep->legs; // 4
echo $sheep->cold_blooded; // "no"

// Opsional: menggunakan method getter
echo $sheep->get_name(); // "shaun"
echo $sheep->get_legs(); // 4
echo $sheep->get_cold_blooded(); // "no"
?>