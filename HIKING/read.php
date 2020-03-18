<?php
session_start();
if(isset($_SESSION['login'])){
  echo 'vous êtes connecté<br>';
  echo '<form action="login.php" method="post"><button name="disconnect">Se déconecter</button></form>';
}else{
  header("Location:login.php");
}
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=becode;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if(isset($_POST['button'])){
    $req = "INSERT INTO `hiking` (`id`, `name`, `difficulty`, `distance`, `duration`, `height_difference`) VALUES (NULL, '".$_POST['name']."', '".$_POST['difficulty']."', '".$_POST['distance']."', '".$_POST['duration']."', '".$_POST['height_difference']."')";
    $stmt = $bdd->exec($req);
    if($stmt == 1)echo "Envoyer Avec succès <br>";
}
if(isset($_POST['update'])){
    $req = "UPDATE hiking SET name = '".$_POST['name']."' WHERE id = '".$_POST['update']."'";
    $bdd->exec($req);
}
if(isset($_POST['data'])){
    $req = "DELETE FROM hiking WHERE id = '".$_POST['data']."'";
    $bdd->exec($req);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
  <a href="./create.php">Ajouter des données</a>
    <h1>Liste des randonnées</h1>
    <table>
    <?php
$resultat = $bdd->query('SELECT * FROM hiking');

echo'<tr><th>Nom</th><th>Difficulté</th><th>Distance</th><th>Durée</th><th>Dénivelé</th></tr>';
//afficher / parcourir
while ($donnees = $resultat->fetch())
{
    echo '<tr>';
    echo '<td>'.$donnees['name'].'</td>';
    echo '<td>'.$donnees['difficulty'].'</td>';
    echo '<td>'.$donnees['distance'].'</td>';
    echo '<td>'.$donnees['duration'].'</td>';
    echo '<td>'.$donnees['height_difference'].'</td>';
    echo '<td><form action="update.php" method="post"><button name="data" value="'.implode('-',$donnees).'">Modifier</button></form></td>';
    echo '<td><form action="read.php" method="post"><button name="data" value="'.$donnees['id'].'">Supprimer</button></form></td>';
    echo '</tr>';
}

//terminer le traitement de la requête 
$resultat->closeCursor();
?>
    </table>
  </body>
</html>



