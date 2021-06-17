<?php 

  require_once __DIR__ . './movie.php';

  $film1 = new Movie("Kill Bill vol.1", "24/10/2003", 30000000, "Quentin Tarantino","Quentin Tarantino");
  $film1->premi = ["2004 - Golden Globe","2004 - Premio BAFTA", "2004 - Empire Awards","2003 - European Film Awards","2004 - Nastro d'argento","2003 - Las Vegas Film Critics Society Awards","2004 - MTV Movie Awards", "2003 - Satellite Award", "2004 - Saturn Award","2004 - Central Ohio Film Critics Association Awards" ];
  $film1->setPrezzo();

  $film2 = new Movie("Kill Bill vol.2","23/04/2004", 30000000, "Quentin Tarantino","Quentin Tarantino");
  $film2->premi = ["2005 - Golden Globe", "2005 - Saturn Award", "2005 - Empire Awards", "2005 - MTV Movie Awards", "2004 - Satellite Award", "2004 - Premio Amanda", "2004 - Critics' Choice Movie Award", "2005 - Grammy Award", "2005 - Golden Reel Award", "2005 - People's Choice Awards", "2004 - Teen Choice Award", "2005 - Eddie Award", "2005 - Central Ohio Film Critics Association Awards", "2004 - Golden Trailer Awards", "2004 - Hollywood Film Festiva", "2004 - Irish Film and Television Award", ];
  $film2->setPrezzo();

  $film3 = new Movie("Fight Club","29/10/1999",63000000,"Chuck Palahniuk", "David Fincher");
  $film3->premi = ["2000 - Premio Oscar", "1999 - Las Vegas Film Critics Society Award", "2000 - MTV Movie Award","2000 - BRIT Award", "2000 - Online Film Critics Society Award", "2000 - Costume Designers Guild Award"];
  $film3->setPrezzo();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>nome:<?php echo $film1->titolo ?></h1>
  <h1>data di uscita : <?php echo $film1->data_uscita ?></h1>
  <h1>costi: <?php echo $film1->costi ?></h1>
  <h1>scritto da: <?php echo $film1->scritto_da ?></h1>
  <h1>diretto da: <?php echo $film1->diretto_da ?></h1>
  <h1>costi: <?php echo $film1->calcolo_prezzo ?></h1>
  <ul>
  <?php foreach($film1->premi as $premio){
     ?>
    <li>
    <?php echo $premio ?>
    </li>
    <?php } ?>
  </ul>
  

</body>
</html>
