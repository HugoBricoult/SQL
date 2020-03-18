<?php
session_start();
if(isset($_SESSION['login'])){
  echo 'vous êtes connecté<br>';
  echo '<form action="login.php" method="post"><button name="disconnect">Se déconecter</button></form>';
}else{
  header("Location:login.php");
}
$newArrays = [];
    if(isset($_POST['data'])){
        $arrayinit = preg_split('/([-])/',$_POST['data']);
        //sup une var sur fa-rotate-2
        
        for($i = 0; $i < sizeof($arrayinit); $i++){
            if($i%2 == 0)array_push($newArrays,$arrayinit[$i]);
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="./read.php">Liste des données</a>
	<h1>Ajouter</h1>
	<form action="read.php" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="<?=$newArrays[1]?>">
		</div>
		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option>
			</select>
		</div>
		
		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="<?=$newArrays[3]?>">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="<?=$newArrays[4]?>">
		</div> 
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="<?=$newArrays[5]?>">
		</div>
		<button type="submit" name="update" value="<?=$newArrays[0]?>">Modifier</button>
	</form>
</body>
</html>