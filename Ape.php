<?php

require_once 'animal.php';

class Ape extends Animal {
    public function __construct($name) {
        parent::__construct($name, 2, 'no'); // Ape memiliki 2 kaki
    }

    public function yell() {
        echo "Auooo";
    }
}
?>