<?php
session_start();
if(isset($_SESSION['login'])){
    header("Location:read.php");
}
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=becode;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if(isset($_POST['register'])){
    $getusername = $bdd->query("SELECT * FROM user WHERE username = '".$_POST['username']."'");
    $donees = $getusername->fetch();
    if($donees != false){
        echo "Pseudo déja existant ! veuillez en choisir un autre";
    }else{
        $pseudo = $_POST['username'];
        $password = md5($_POST['password']);
        echo "ce pseudo est libre ! ";
        $req = "INSERT INTO user (username, password) VALUES ('$pseudo', '$password')";
        $bdd->exec($req);
        header("Location:login.php");
    }
}
?>
<h2>S'enregistrer</h2>
<form action="signup.php" method="post">
    <label for="username">Pseudo</label>
    <input type="text" name="username" id=""><br>
    <label for="password">Password</label>
    <input type="text" name="password" id=""><br>
    <input type="submit" value="S'enregistrer" name="register">
</form>