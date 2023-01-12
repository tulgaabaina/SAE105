<?php
session_start();                       // WARNING : NE PAS EFFACER CETTE LIGNE
include('helpers/magasinHelper.php');  // WARNING : NE PAS EFFACER CETTE LIGNE



?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>The Computer Shop</title>
    <link rel="stylesheet" href="style\visuPanier.css">
</head>

<body>
    <div class="logo">
        <img class="top" src="assets\site\logo-white.png" alt="">
        <p>We take care of your feet</p>

    </div>
    <div class="nav">
        <div>
            <a href="index.php">Accueil</a>
            <a href="magasin.php">Le shop</a>
            <a href="#contact">Nos magasins</a>
            <a href="#about">Nous contacter</a>
        </div>
        <div class="pan"><img class="panier" src="assets\site\pannier.svg" style="width:10; height:10" alt="">
            <div style="margin-right: 10px;">Panier</div>
        </div>
    </div>

    <div>
        <div class="container1">
            <div style="margin-left: 20px; margin-right: 20px; margin-bottom: 20px;">
                <h2 style="font-family:Arial, Helvetica, sans-serif; color: #173648">VOTRE PANIER</h2>
                <div>
                    <div class="text">
                        <div style="margin-left: 180px">Designation</div>
                        <div style="margin-left: 113px">P.U. TTC</div>
                        <div style="margin-left: 50px">Quantite</div>
                        <div style="margin-left: 100px">Total TTC</div>
                    </div>
                    <hr>
                    <div class="text2">
                        <img style="width: 80px; height:60px" src="assets/produits/sneakers1.webp" alt="">
                        <div style="margin-left: 50px">Air Jordan 1 Mid Ice Blue</div>
                        <div style="margin-left: 100px">140</div>
                        <div style="margin-left: 70px; margin-right: 10px;">1</div>
                        <button class="carts" style="width: 35px; height:35px; background-color: #136696; border-radius: 5px; border: 5px solid #136696" ><img style="width: 25px; height:25px;" src="assets\site\rmProduct.png"></button>
                        <div style="margin-left: 150px; font-weight: bold;">140</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container2"></div>
    </div>

</body>

</html>