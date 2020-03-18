<?php

session_start();
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=becode;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

if(isset($_POST['password']) & isset($_POST['login'])){
    $password = $_POST['password'];
    $login = $_POST['login'];
    $rep = $bdd->query("SELECT * FROM user WHERE username = '$login'");
    $data = $rep->fetch();
    var_dump($data);
    if($data == false){
        echo "Vous n'êtes pas enregistré !";
    }else{
        if(md5($password) == $data['password']){
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];
            header("Location:read.php");
        }else{
            echo "<script>alert('Mauvais mot de passe !');</script>";
        }
    }
}
if(isset($_POST['disconnect'])){
    session_destroy();
    echo 'vous avez été déconnecté';
}
?>
<h2>Se connecter</h2>
<form action="login.php" method="post">
    <label for="login">Pseudo</label>
    <input type="text" name="login" id=""><br>
    <label for="password">Password</label>
    <input type="text" name="password" id="">
    <input type="submit" value="Se connecter">
</form>
<p>pas encore inscrit ? <a href="signup.php">S'inscrire</a></p>