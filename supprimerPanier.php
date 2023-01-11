<?php
session_start();                     // WARNING : NE PAS EFFACER CETTE LIGNE
include("helpers/magasinHelper.php");// WARNING : NE PAS EFFACER CETTE LIGNE


$refProduit = $_GET["reference"];

// Je vérifie si le panier existe
// Je vérifie si la référence est dans le panier

// Je teste la quantité. si q = 1, je supprime la référence
// sinon je décrémente la quantité









// Pas de code à vous après cette ligne
$_SESSION['panier'] = $panier; // WARNING : NE PAS EFFACER CETTE LIGNE
echo "<pre>";print_r($panier);echo "</pre>";die(1);  // Voila l'état actuel du panier. Supprimer cette ligne, dès que votre script marche


header('Location:magasin.php'); // je retourne voir le panier
?>