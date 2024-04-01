<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>AJ Coding International</title>
    <link rel="icon" href="icons/programming_48px.png">
</head>
<body>


<form action="" method="POST" Class="form">

<?php  require 'config.php';
$Id=$_GET["id"];
$rows = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM information WHERE Id = $Id"));
$tab=[];
$tab=explode(",",$rows['LOISIRS']);


?> 


<input id="id"  type="hidden" value="<?php echo $rows['Id']; ?>">
<a href="index.php" class="Btn_add"> <img src="icons/back_to_48px.png"> Retour</a>
   
<h2> Edite page</h2>


<label  for="Nom">Nom</label>
    <input name="Nom" type="text"  value="<?php echo $rows['NOM']; ?>" class="Nom">
    <div></div>
    <label for="Prenom">Prenom</label>
    <input name="Prenom" type="text"value="<?php echo $rows['PRENOM']; ?>"class="Prenom">
    <div></div>
    <label   for="">Sexe</label>
    <input type="radio"name="sexe" class="Homme" value="Homme" <?php if( $rows['SEXE']== "Homme") {echo "checked";}; ?>><label for="Male">Homme</label>
    <input type="radio"name="sexe" class="Femme" value="Femme"<?php if( $rows['SEXE']== "Femme") {echo "checked";}; ?>><label for="Female">Femme</label>
    <div></div>
    <label for="Contact">Contact</label>
    <input id="Contact" type="Number"value="<?php echo $rows['CONTACT']; ?>"class="Contact">
    <div></div>
    <label for="Ville">ville</label>
    <input id="Ville" type="text"value="<?php echo $rows['VILLE']; ?>"class="Ville">
   
    <div></div>
     <label for="Statue"> Statue :</label>
    <select name="" id="statue">
        <option value="Marie"<?php if( $rows['STATUE']== "Marie") {echo "selected";}; ?>>Marie</option>
        <option value="Celibataire"<?php if( $rows['STATUE']== "Celibataire") {echo "selected";}; ?>>Celibataire</option>
        <option value="En couple"<?php if( $rows['STATUE']== "En couple") {echo "selected";}; ?>>En couple</option>
    </select>

    <div> <label id="Loisirs" for="Loisirs"><u>Loisirs </u></label>
    <div></div>
    <input type="checkbox" value="Football"class="Football"<?php for( $inc=0 ;$inc <count ($tab);$inc=$inc+1) {if ($tab[$inc]=="Football") {echo "checked";} }; ?>/><label for="Football">Football</label>
    <input type="checkbox"value="Basketball"class="Basketball"<?php for( $inc=0 ;$inc <count ($tab);$inc=$inc+1) {if ($tab[$inc]=="Basketball") {echo "checked";} }; ?>/><label for="Basketball">Basketball</label>
    <input type="checkbox"value="Handball"class="Handball"<?php for( $inc=0 ;$inc <count ($tab);$inc=$inc+1) {if ($tab[$inc]=="Handball") {echo "checked";} }; ?>/><label for="Handball">Handball</label>
    <input type="checkbox"value="Voleyball"class="Voleyball"<?php for( $inc=0 ;$inc <count ($tab);$inc=$inc+1) {if ($tab[$inc]=="Voleyball") {echo "checked";} }; ?>/><label for="Voleyball">Voleyball</label>
    <input type="checkbox"value="Baseball"class="Baseball"<?php for( $inc=0 ;$inc <count ($tab);$inc=$inc+1) {if ($tab[$inc]=="Baseball") {echo "checked";} }; ?>/><label for="Baseball">Baseball</label>
    <div></div>
    <input type="checkbox"value="Swimming"class="Swimming"<?php for( $inc=0 ;$inc <count ($tab);$inc=$inc+1) {if ($tab[$inc]=="Swimming") {echo "checked";} }; ?>/><label for="Swimming">Swimming</label>
    <input type="checkbox"value="Running"class="Running"<?php for( $inc=0 ;$inc <count ($tab);$inc=$inc+1) {if ($tab[$inc]=="Running") {echo "checked";} }; ?>/><label for="Running">Running</label>
    <input type="checkbox"value="Raley"class="Raley"<?php for( $inc=0 ;$inc <count ($tab);$inc=$inc+1) {if ($tab[$inc]=="Raley") {echo "checked";} }; ?>/><label for="Raley">Raley</label>
    <input type="checkbox"value="UFC"class="UFC"<?php for( $inc=0 ;$inc <count ($tab);$inc=$inc+1) {if ($tab[$inc]=="UFC") {echo "checked";} }; ?>/><label for="UFC">UFC</label>
    <input type="checkbox"value="Golf"class="Golf"<?php for( $inc=0 ;$inc <count ($tab);$inc=$inc+1) {if ($tab[$inc]=="Golf") {echo "checked";} }; ?>/><label for="Golf">Golf</label>


    <div></div>

<br>
    </div>
    <button  style="border:none;hight: 50px; width:500px;  background:#2E303E;cursor:pointer;" type="button" onclick="Data ('edit')"><img src="icons/check_circle_480px.png"></button>

    <?php require 'script.php'?>
</form>

</body>
</html>