<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if(isset($_POST['ajout'])){
    $cardNumber = $_POST['cardNumber'];
    //if($_POST['cardNumber'] == "")$cardNumber = NULL;
    $req = "INSERT INTO clients (firstName, lastName, birthDate, card, cardNumber) VALUES (
        '".$_POST['firstName']."',
        '".$_POST['lastName']."',
        '".$_POST['birthDate']."',
        '".$_POST['card']."',
        '$cardNumber'
    )";
    $stmt = $bdd->exec($req);
}
?>
<form action="index.php" method="post">
    <label for="firstName">Nom</label>
    <input type="text" name="firstName"><br>
    <label for="lastName">Prenom</label>
    <input type="text" name="lastName"><br>
    <label for="birthDate">Date de naissance</label>
    <input type="date" name="birthDate"><br>
    <label for="card">Carte de fidélité</label>
    <label>J'ai une carte</label>
    <input type="radio" name="card" value="1"><br>
    <label>Je n'ai pas de carte</label>
    <input type="radio" name="card" value="0"><br>
    <label for="cardNumber">Numéro de carte</label>
    <input type="number" name="cardNumber" value=""><br>
    <input type="submit" value="Envoyer" name="ajout">
</form>
