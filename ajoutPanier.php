<?php
session_start(); // WARNING : NE PAS EFFACER CETTE LIGNE
include("helpers/magasinHelper.php");


$refProduit = $_GET["reference"];


// Je vérifie que mon panier existe, sinon je le crée
// Rappel : le panier est une entrée dans le tableau associatif $_SESSION avec la clef "panier"
// Cette entrée constitue un tableau associatif dont les clefs sont les références des produits et les valeurs les quantités associées

// Je vérifie que ma référence est déjà présente dans le panier. 
// si oui j'augmente la quantité
// sinon j'ajoute le produit dans le panier









// Pas de code à vous après cette ligne

$_SESSION['panier'] = $panier; // WARNING : NE PAS EFFACER CETTE LIGNE


echo "<pre>";print_r($panier);echo "</pre>";die(1);  // Voila l'état actuel du panier. Supprimer cette ligne dès que votre script marche


header('Location:magasin.php'); // Je retourne voilr le panier
?>