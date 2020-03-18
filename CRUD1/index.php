<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
//exo 1 clients
$resultat = $bdd->query('SELECT * FROM clients');
echo '<h2>1 Clients</h2>';
echo '<table>';
echo '<tr>';
echo '<th>ID</th><th>Nom</th><th>Prénom</th><th>Anniversair</th><th>Carte</th><th>Numéro de carte</th>';
echo '</tr>';
while ($donnees = $resultat->fetch()){
    echo '<tr>';
        echo '<td>'.$donnees['id'].'</td>';
        echo '<td>'.$donnees['lastName'].'</td>';
        echo '<td>'.$donnees['firstName'].'</td>';
        echo '<td>'.$donnees['birthDate'].'</td>';
        echo '<td>'.$donnees['card'].'</td>';
        echo '<td>'.$donnees['cardNumber'].'</td>';
    echo '</tr>';
}
echo '</table>';
echo '<h2>2 Types de spectacle</h2>';
//exo 2 types
$resultat = $bdd->query('SELECT * FROM showtypes');
echo '<table>';
echo '<tr>';
echo '<th>ID</th><th>Types</th>';
echo '</tr>';
while ($donnees = $resultat->fetch()){
    echo '<tr>';
        echo '<td>'.$donnees['id'].'</td>';
        echo '<td>'.$donnees['type'].'</td>';
    echo '</tr>';
}
echo '</table>';
//exo 3 20 premier clients
$resultat = $bdd->query('SELECT * FROM clients LIMIT 20');
echo '<h2>3 20 premiers clients</h2>';
echo '<table>';
echo '<tr>';
echo '<th>ID</th><th>Nom</th><th>Prénom</th><th>Anniversair</th><th>Carte</th><th>Numéro de carte</th>';
echo '</tr>';
while ($donnees = $resultat->fetch()){
    echo '<tr>';
        echo '<td>'.$donnees['id'].'</td>';
        echo '<td>'.$donnees['lastName'].'</td>';
        echo '<td>'.$donnees['firstName'].'</td>';
        echo '<td>'.$donnees['birthDate'].'</td>';
        echo '<td>'.$donnees['card'].'</td>';
        echo '<td>'.$donnees['cardNumber'].'</td>';
    echo '</tr>';
}
echo '</table>';
//exo 4 clients avec carte
$resultat = $bdd->query('SELECT * FROM clients WHERE card = "1"');
echo '<h2>4 clients avec carte</h2>';
echo '<table>';
echo '<tr>';
echo '<th>ID</th><th>Nom</th><th>Prénom</th><th>Anniversair</th><th>Carte</th><th>Numéro de carte</th>';
echo '</tr>';
while ($donnees = $resultat->fetch()){
    echo '<tr>';
        echo '<td>'.$donnees['id'].'</td>';
        echo '<td>'.$donnees['lastName'].'</td>';
        echo '<td>'.$donnees['firstName'].'</td>';
        echo '<td>'.$donnees['birthDate'].'</td>';
        echo '<td>'.$donnees['card'].'</td>';
        echo '<td>'.$donnees['cardNumber'].'</td>';
    echo '</tr>';
}
echo '</table>';
//exo 5 client commence par M
$resultat = $bdd->query('SELECT * FROM clients WHERE lastName LIKE "M%" ');
echo '<h2>5 clients commence par M</h2>';
while ($donnees = $resultat->fetch()){
    
    echo 'Nom : '.$donnees['lastName'].'<br>';
    echo 'Prenom : '.$donnees['firstName'].'<br><br>';
}
//exo 6 spectacl par ordre alphabétique
$resultat = $bdd->query('SELECT * FROM shows ORDER BY performer');
echo '<h2>6 spectacl alphabétique</h2>';
echo '<table>';
echo '<tr>';
echo '<th>ID</th><th>Artiste</th><th>Date</th><th>Heure</th>';
echo '</tr>';
while ($donnees = $resultat->fetch()){
    echo '<tr>';
        echo '<td>'.$donnees['id'].'</td>';
        echo '<td>'.$donnees['performer'].'</td>';
        echo '<td>'.$donnees['date'].'</td>';
        echo '<td>'.$donnees['startTime'].'</td>';
    echo '</tr>';
}
echo '</table>';
//exo 7 clients ordre
$resultat = $bdd->query('SELECT * FROM clients');
echo '<h2>7 Clients ordre</h2>';

while ($donnees = $resultat->fetch()){
    
        echo 'Nom : '.$donnees['lastName'].'<br>';
        echo 'Prénom : '.$donnees['firstName'].'<br>';
        echo 'Date de naissance : '.$donnees['birthDate'].'<br>';
        echo 'Carte de fidèlité : '.$donnees['card'].'<br>';
        echo 'Numéro de carte : '.$donnees['cardNumber'].'<br>';
        echo '<hr>';
}
