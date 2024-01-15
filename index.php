<?php
//inclusione files di progetto
require_once __DIR__ . '/models/Movie.php';


// require_once __DIR__ . '/models/Address.php';
// require_once __DIR__ . '/models/Helper.php';
// echo 60 . " min";

$movie_1 = new movie ("The Revenant", "Avventura", "10", "USA");

var_dump($movie_1);