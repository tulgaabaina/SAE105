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
    <link rel="stylesheet" href="style\magasin.css">
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
            <div style="margin-right: 10px;">Panier
            </div>
        </div>
    </div>

    <div class="container">
        <div class="main">
            <div class="pic1">
                <img class="img" src="assets\produits\sneakers1.webp" alt="">
            </div>
            <div class="text">
                <h4>Air Jordan 1 Mid Ice Blue</h4>
                <div>La marque au Jumpman nous réserve son lot de surprises en ce début d'année, preuve en est cette
                    nouvelle Air Jordan 1 Mid Ice Blue. La silhouette mi-montante se distingue par ses nuances de bleu.
                    Elle affiche une base en cuir bleu
                    pastel surmontée de superpositions en cuir grainé bleu université. De plus, le swoosh latéral est
                    doublé d'un liseré noir assorti au logo Wings et au Jumpman sur la languette. Pour finir, une
                    midsole blanche et une outsole bleue parachèvent le design.</div>
            </div>
            <hr style="margin:0">
            </hr>
            <div class="price">140€</div>
            <div class="basket">

                <img class="buy" src="assets\site\buy.png" alt=""></img>
            </div>
        </div>

    </div>

    <?php
    //j'affiche mes produits
    ?>
</body>

</html>