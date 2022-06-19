<?php
/*
Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
La classe può essere definita internamente al file index.php o essere inclusa (soluzione preferibile)
*/

require_once __DIR__ . "/class/movies.php";
$joker = new Movie('Joker', 'Drama', 2019);
$VforVendetta = new Movie('V for Vendetta', 'Action/Drama', 2005);
$tenet = new Movie('Tenet', 'Action', 2020);
$meetTheParents = new Movie('Meet the Parents', 'Comic', 2019);

$movies = array($joker, $VforVendetta, $tenet, $meetTheParents);

var_dump($movies)

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-OPP-1</title>
</head>
<body>
  <h1>Movies</h1>
  <?php foreach($movies as $movie): ?>
    <div>
      <ul>
        <li><h2>Title:</h2><?php echo $movie->getTitle() ?></li>
        <li><h2>Genre:</h2><?php echo $movie->getGenre() ?></li>
        <li><h2>Release Date:</h2><?php echo $movie->getReleaseDate() ?></li>
      </ul>
      <hr>
    </div>

  <?php endforeach ?>

</body>
</html>