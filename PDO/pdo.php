<?php
//Connection à la DB
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

//simple import de données
$resultat = $bd->query('SELECT * FROM meteo');

//afficher / parcourir
while ($donnees = $resultat->fetch())
{
    echo $donnees['nom_de_la_colonne'];
}

//terminer le traitement de la requête 
$resultat->closeCursor();

