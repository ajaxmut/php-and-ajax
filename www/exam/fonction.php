<?php 
require 'config.php';
if (isset ($_POST["action"])){
if($_POST["action"]=="insert"){insert();}

else if($_POST["action"]=="edit") {edit();}

else {delete();}
}

function insert(){
global $conn;
$Nom=$_POST["Nom"];
$Prenom=$_POST["Prenom"];
$Ville=$_POST["Ville"];
$Contact=$_POST["Contact"];
$Sexe=$_POST["Sexe"];
$Loisirs=$_POST["Loisirs"];
$STATUE=$_POST["STATUE"];
$querry ="INSERT INTO  information (NOM,PRENOM,VILLE,CONTACT,SEXE,LOISIRS,STATUE) VALUES ('{$Nom}','{$Prenom}','{$Ville}','{$Contact}','{$Sexe}','{$Loisirs}','{$STATUE}')";
mysqli_query($conn,$querry);
echo"Enregistre avec succer !!!!";
}

function delete(){
global $conn;
$Id=$_POST["action"];
$query="DELETE FROM information WHERE Id=$Id";
mysqli_query($conn,$query);
echo"Vous avez effacer une personne !!!!!!";

}
function edit(){
global $conn;
$id=$_POST['id'];
$Nom=$_POST["Nom"];
$Prenom=$_POST["Prenom"];
$Ville=$_POST["Ville"];
$Contact=$_POST["Contact"];
$gender=$_POST["Sexe"];
$Loisirs=$_POST["Loisirs"];
$STATUE=$_POST["STATUE"];
$querry ="UPDATE information SET NOM='$Nom',PRENOM='$Prenom',VILLE='$Ville',CONTACT='$Contact',LOISIRS='$Loisirs',STATUE='$STATUE',SEXE='$gender' WHERE Id='$id'";
mysqli_query($conn,$querry);
echo"Modification  avec succe !!!!!";



}


?>