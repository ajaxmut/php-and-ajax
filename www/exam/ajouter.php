<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- link css -->
     <link rel="stylesheet" href="css/style.css">
     <title>AJ Coding International</title>
    <link rel="icon" href="icons/programming_48px.png">


</head>
<body>
    
<?php  require 'config.php';
$rows=mysqli_query($conn,"SELECT *FROM information"); $i=1; ?>

<form action="" method="POST"  Class="form">

<a href="index.php" class="Btn_add"> <img src="icons/back_to_48px.png"> Retour</a>
<h2>Ajouter des nouveaux personnes</h2>
    <label for="Nom">Nom : </label>
    <input  type="text" class="Nom">
    <div></div>
   
    <label for="Prenom" style="border:none; hight: 80px; width:500px;  background:#FFFFFF;" >Prenom : </label><br>
    <input type="text"class="Prenom">
    <div></div>
    <label for="Sexe">Sexe :</label>
    <input type="radio"name="sexe" value="Homme"class="Homme"><label for="Male">Homme</labelSSS>
    <input type="radio" name="sexe" value="Femme"class="Femme"><label for="Female">Femme</label>
    <div></div>
    <label for="Contact">Contact :</label>
    <input type="Number"class="Contact">
    <div></div>
    <label for="Ville"> Ville :</label>
    <input type="text"class="Ville">
    <div></div>
    <label for="Statue"> Statue :</label>
    <select name="" id="statue">
        <option value="Marie">Marie</option>
        <option value="Celibataire">Celibataire</option>
        <option value="En couple">En couple</option>
    </select>

    <div> <label for="Loisirs"><u>Loisirs </u></label>
    <br>  <div></div>
    <input type="checkbox" value="Football"class="Football"><label for="Football">Football</label>
    <input type="checkbox"value="Basketball"class="Basketball"><label for="Basketball">Basketball</label>
    <input type="checkbox"value="Handball"class="Handball"><label for="Handball">Handball</label>
    <input type="checkbox"value="Voleyball"class="Voleyball"><label for="Voleyball">Voleyball</label>
    <input type="checkbox"value="Baseball"class="Baseball"><label for="Baseball">Baseball</label>
<br>
    <input type="checkbox"value="Swimming"class="Swimming"><label for="Swimming">Swimming</label>
    <input type="checkbox"value="Running"class="Running"><label for="Running">Running</label>
    <input type="checkbox"value="Raley"class="Raley"><label for="Raley">Raley</label>
    <input type="checkbox"value="UFC"class="UFC"><label for="UFC">UFC</label>
    <input type="checkbox"value="Golf"class="Golf"><label for="Golf">Golf</label>
    <div></div>

   <br>
    </div>
    <div></div>
    <button  style="border:none; hight: 80px; width:500px;  background:#2E303E;cursor:pointer;  border-raduis:5px;" type="button" onclick="Data ('insert')"><img src="icons/save_48px.png"></button>
</form>




<?php  require 'config.php';
$rows=mysqli_query($conn,"SELECT *FROM information"); $i=1; ?>


<?php  foreach ($rows as $row):  ?>


<?php endforeach ;?>

<?php require 'script.php'?>
    
</body>
</html>



