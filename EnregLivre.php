<html>
<body>
<h1>Enregistrement d'un livre</h1>
<form action='Validlivres.php' method='post'>
<table>
<tr>
<td>Nom de l'auteur </td>
<td>:</td>
<td><input type="text" name="nameaut"/></td>
</tr>
<tr>
<td>Prenom de l'auteur     </td>
<td>:</td>
<td><input type="text" name="prenomaut"/></td>
</tr>
<tr>
<td>Titre      </td>
<td>:</td>
<td><input type="text" name="titre"/></td>
</tr>
<tr>
<td>Categorie       </td>
<td>:</td>
<td><select name="cat">
  <option value="roman">Roman</option>
  <option value="Sciencefiction">Science-fiction</option>
  <option value="junior">junior</option>
  <option value="policier">policier</option>
</select></td>
</tr>
<tr>
<td>livcodeero ISBN </td>
<td>:</td>
<td><input type="text" name="ISBN"/></td>
</tr>
<tr>
<td>
<input type="submit" name="enregistrerl" value="enregistrer"/>
</td>
</tr>
</table>
</form>
</body>
</html>
<?php 
require 'BD.php';

?>
<?php 
session_start();
require 'data_base.php';
include 'data_base.php';
if(isset($_POST['enregistrerl'])){

if (isset($_POST['nameaut']) && isset($_POST['prenomaut']) && isset($_POST['titre'])&& isset($_POST['cat'])&& isset($_POST['ISBN'])) {
$livnomaut=$_POST['nameaut'];
$livprenomaut=$_POST['prenomaut'];
$livtitre=$_POST['titre'];
$livcategorie=$_POST['cat'];
$livISBN=$_POST['ISBN'];
$livdejareserve=0;
$A=mb_substr($_POST['nameaut'], 0, 2);
$B=mb_substr($_POST['prenomaut'], 0, 2);
$C=substr($_POST['ISBN'],-2);
$livcode="{$A}{$B}{$C}";

$stmt = $conn->query("insert into lecteurs (livcode, livnomaut, livprenomaut,livtitre,livcategorie,livISBN,livdejareserve)
values (':livcode',:livnomaut, :livprenomaut, :livtitre,:livcategorie,:livISBN,:livdejareserve)");
$stmt->bindParam(':livcode', $livcode);
$stmt->bindParam(':livnomaut', $livnomaut);
$stmt->bindParam(':livprenomaut', $livprenomaut);
$stmt->bindParam(':livtitre', $livtitre);
$stmt->bindParam(':livcategorie', $livcategorie);
$stmt->bindParam(':ISBN', $ISBN);
$stmt->bindParam(':livISBN', $livISBN);
$stmt->bindParam(':livdejareserve', $livdejareserve);
$stmt->execute();
  

}}
    
 
$conn = null;
?>