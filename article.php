<?php
session_start(); // WARNING : NE PAS EFFACER CETTE LIGNE
include('helpers/magasinHelper.php'); // WARNING : NE PAS EFFACER CETTE LIGNE


//je crée mon tableau des produits

?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>The Computer Shop</title>
    <link rel="stylesheet" href="style\article.css">
</head>

<Body>
    <div class="logo">
        <img class="top" src="assets\site\logo-white.png" alt="">
        <p>We take care of your feet</p>

    </div>
    <div class="nav">
        <div>
            <a class="a" href="index.php">Accueil</a>
            <a class="a" href="magasin.php">Le shop</a>
            <a class="a" href="#contact">Nos magasins</a>
            <a class="a" href="#about">Nous contacter</a>
        </div>
        <div class="pan"><img class="panier" src="assets\site\pannier.svg" style="width:10; height:10" alt="">
            <a href="visuPanier.php" style="margin-right: 10px; text-decoration:none; color:#27b4bc">Panier</a>
        </div>
    </div>

    <div style="width: 100vw; height: 100vh;">
        <div style="display: flex; justify-content: center; align-items: center; margin-top: 50px;">
            <div style="display: flex; justify-content: center; align-items: center; gap: 50px;">
                <img class="img1" src="assets\produits\sneakers1.webp">
                <div style="width: 900px;">
                    <h1 style="color: brown;">Air Jordan 1 Mid Ice Blue</h1>
                    <div style="font-weight: bold; font-size: 20px; margin-bottom: 30px;">140€</div>
                    <div style="font-family:arial;  width: 900px; font-size: 18px;">La marque au Jumpman nous réserve son lot de surprises en ce début d’année, preuve en est cette nouvelle Air Jordan 1 Mid Ice Blue.<br>La silhouette mi-montante se distingue par ses nuances de bleu. Elle affiche une base en cuir bleu pastel surmontée de superpositions en cuir grainé bleu université. De plus, le swoosh latéral est doublé d’un liseré noir assorti au logo Wings et au Jumpman sur la languette. Pour finir, une midsole blanche et une outsole bleue parachèvent le design.</div>
                </div>
            </div>

        </div>
        <div style="display: flex;justify-content: center; align-items: center;"> <a href="visuPanier.php" class="cart">Ajouter au Panier</a></div>
        <div style="margin-left: 300px; margin-top: 80px;">
            <h1 style="font-family:Arial, Helvetica, sans-serif">Avis (6.33/10)</h1>
            <div style="font-family: arial;  ">
                <div style="font-size: 20px">Seb, le 12/05/2018 (7/10)</div>
                <div style="margin-left: 10px;">Super produit je le recommande </div>
            </div>
            <div style="font-family: arial; margin-top: 30px ">
                <div style="font-size: 20px">Vincent, le 12/05/2018 (2/10)</div>
                <div style="margin-left: 10px;">Super produit je le recommande, duu duper! </div>
            </div>
            <div style="font-family: arial; margin-top: 30px ">
                <div style="font-size: 20px">Gillies, le 12/05/2018 (7/10)</div>
                <div style="margin-left: 10px; ">Super produit je le recommande , super profuit se le bolt :(</div>
            </div>

        </div>
        <div style="margin-left: 300px; margin-top: 80px;">
            <h1 style="font-family: arial;">Produits similaires</h1>
            <div style="margin-left: 30px; display: flex; gap: 130px; margin-top: 60px; font-family: arial;">
                <div>
                    <div style="font-weight: bold; font-size: 18px;">Nike SB Dunk Low Pro Parra</div>
                    <img style="width: 250px; height: 250px;" src="assets\produits\sneakers12.webp" alt="">
                </div>
                <div style="display:flex; flex-direction:column;  justify-content: center; align-items: center; ">
                    <div style="font-weight: bold; font-size: 18px;">Sneakers Demon Slayer Giyu High Blue</div>
                    <img style="width: 250px; height: 250px;" src="assets/produits/sneaker13.webp" alt="">
                </div>
            </div>
        </div>
    </div>
    <?php
    //j'affiche mes produits
    ?>
</Body>

</html>