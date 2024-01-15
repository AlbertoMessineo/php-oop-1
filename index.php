<?php
//inclusione files di progetto
require_once __DIR__ . '/models/Movie.php';


// require_once __DIR__ . '/models/Address.php';
// require_once __DIR__ . '/models/Helper.php';
// echo 60 . " min";

$movie_1 = new movie ("The Revenant", "Western, Avventura", "157", "USA");
$movie_2 = new movie ("La dolce vita", "Drammatico", "154", "Italia");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php   
var_dump($movie_1);
?>
<hr>
<?php   
var_dump($movie_2);
?>
</body>
</html>