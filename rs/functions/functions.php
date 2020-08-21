<?php
//connexion a la base de donnees
mysqli_connect('localhost','root','')or die('error');
//mysqli_select_db('rs')or die("Bdd introuvable");
mysqli_query('SET NAMES utf8');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'rs');

//funnction qui va se charger d'inscrire

function inscrire_utilisateur($pseudo,$password,$email,$sexe,$situation,$apropos)
{
	$password=sha1($password);
	mysqli_query("insert into utilisateurs(id,pseudo,password,email,sexe,situation,apropos)
	valeus('','$pseudo','$password','$email','$sexe','$situation','$apropos')
	")or die(mysql_error());
	
}

?>
