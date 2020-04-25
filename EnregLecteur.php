<html>
<body>
<h3>Enregistrement d'un lecteur</h3>
<br>
<form method="post" action="Validlecteurs.php">
<table>
<tr>
<td>Nom </td>
<td>:</td>
<td><input type="text" name="name"/></td>
</tr>
<tr>
<td>Prénom </td>
<td>:</td>
<td><input type="text" name="prenom"/></td>
</tr>
<tr>
<td>Adresse </td>
<td>:</td>
<td><input type="text" name="adresse"/></td>
</tr>
<tr>
<td>Mot de passe</td>
<td>:</td>
<td><input type="password" name="password"/></td>
</tr>
<tr>
<td>Ville :</td>
<td>:</td>
<td><input type="text" name="ville"/></td>
</tr>
<tr>
<td>Code Postal </td>
<td>:</td>
<td><input type="text" name="code"/></td>
</tr>
<tr colspan="3">
<td>
<input type="submit" name="enregistrer" value="enregistrer"/>
</td>
</tr>
</table>
</form>
</body>
</html>
<?php 
session_start();
require 'data_base.php';
include 'data_base.php';
if(isset($_POST['enregistrer'])){

if (isset($_POST['name']) && isset($_POST['prenom']) && isset($_POST['adresse'])&& isset($_POST['password'])&& isset($_POST['ville'])&& isset($_POST['code'])) {
$nom=$_POST['name'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$password=$_POST['password'];
$ville=$_POST['ville'];
$postal=$_POST['code'];
$num=random_int(100, 999);

$stmt = $conn->query("insert into lecteurs (lecnum, lecnom, lecprenom,lecadresse,lecville,leccodepostal,lecmotdepasse)
values (':num',:nom, :prenom, :adresse,:ville,:code,:password)");
$stmt->bindParam(':num', $num);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':adresse', $adresse);
$stmt->bindParam(':ville', $ville);
$stmt->bindParam(':code', $postal);
$stmt->bindParam(':password', $password);
$stmt->execute();
  

}}
    
 
$conn = null;
?>