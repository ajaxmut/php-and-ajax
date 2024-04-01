<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="java/script.js"></script>
    <title>AJ Coding International</title>
    <link rel="icon" href="icons/programming_48px.png">


</head>

<body>
<div  Class="form">
<a href="ajouter.php" class="Btn_add"> <img src="icons/plus_+_96px.png"> Ajouter</a>
<h2>index page</h2>
<!-- tableaux -->
<table>
<tr>
<td>ID</td>
<td>NOM</td>
<td>PRENOM</td>
<td>SEXE</td>
<td>LOISIRS</td>
<td>CONTACT</td>
<td>VILLE</td>
<td>STATUE</td>
<td>ACTION</td>
</tr>
<!-- Affichage des donnees -->
<?php  require 'config.php';
$rows=mysqli_query($conn,"SELECT *FROM information"); $i=1; ?>
<?php  foreach ($rows as $row):  ?>
<tr  id= <?php echo $row ["Id"]; ?>>   
<td> <?php echo $i++;?></td>
<td ><?php echo $row ["NOM"]; ?></td>
<td ><?php echo $row ["PRENOM"]; ?></td>
<td ><?php echo $row ["SEXE"]; ?></td>
<td ><?php echo $row ["LOISIRS"]; ?></td>
<td ><?php echo $row ["CONTACT"]; ?></td>
<td ><?php echo $row ["VILLE"]; ?></td>
<td ><?php echo $row ["STATUE"]; ?></td>
<td>
    <a href="edit.php?id= <?php echo $row ["Id"]; ?>"><img src="icons/edit_file_48px.png"></a>
<button  style="border:none;" type="button" onclick="Data(<?php echo $row ['Id']; ?>);"><img src="icons/remove_48px.png"></button>


</td>
</tr>
<?php endforeach ;?>
<?php  require 'config.php'; ?>
<?php require 'script.php'?>
</table>

</div>
</body>
</html>