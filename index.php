<?php
session_start();                       // WARNING : NE PAS EFFACER CETTE LIGNE
include('helpers/magasinHelper.php');  // WARNING : NE PAS EFFACER CETTE LIGNE


//je crée mon tableau des produits (il sera utile...)


?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>The Computer Shop</title>
    <link rel="stylesheet" href="style\style.css">
</head>

<body>
<div class="logo">
  <img src="assets\site\logo-white.png" alt="">
  <p>We take care of your feet</p>
  
</div>
<div class="nav">
  <a href="index.php">Accueil</a>
  <a href="magasin.php">Le shop</a>
  <a href="#contact">Nos magasins</a>
  <a href="#about">Nous contacter</a>
</div>
<?php
// a votre imagination
?>
</body>
</html>
