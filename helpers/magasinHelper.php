<?php

// prend en paramètre le nom d'un fichier (au format JSON) à charger
// retourne un tableau associatif
// Question : $nomFichier est : un tableau, une chaine de caractère, ou un entier ? Si c'est un tableau que contient il ?
function chargerFichier($nomFichier) {
    // TODO
}

// prend en paramètre un produit
// affiche le code html permettant l'affichage du produit
// Question : $produit est : un tableau, une chaine de caractère, ou un entier ? Si c'est un tableau que contient il ?
// Et reference ?
function afficheProduit($produit, $reference) {
    // TODO
}

// prend en paramètre un comentaire
// Affiche le code html permettant l'affichage d'un commentaire
// Question : $avis : un tableau, une chaine de caractère, ou un entier ? Si c'est un tableau que contient il ?
function afficheCommentaire($avis) {
    // TODO
}

// Prend en paramètre un produit
// Affiche le code HTML permettant d'afficher le bloc correspondant au produi similaire
// Question : $produit est : un tableau, une chaine de caractère, ou un entier ? Si c'est un tableau que contient il ?
function afficheArticleSimilaire($produit) {
    // TODO
}

// prend en paramètre un tableau indicé de commentaires
// retourne la moyenne des notes relative aux avis associés à cette référence
function calculeMoyenne($reference) {
    // TODO
}




//----------------------------------------------------------------------------------------
// WARNING : ne pas modifier ces lignes
//----------------------------------------------------------------------------------------

if(isset($_SESSION['panier']) == false)
    $_SESSION['panier'] = [];
$panier = $_SESSION["panier"];

?>
