<html>
<body>
<h1>Gestion du lecteur</h1>
<p>Le lecteur n'est pas reconnu</p>
<p>Cliquez<a href="login.php">ici</a>pour tenter une nouvelle identification</p>
<br>
<h3>Enregistrement d'un lecteur</h3>
<p>Si vous etes un nouveau lecteur,veuillez vous enregistrer en remplissant le formulaire ci-dessous:</p>

<form method="post" action="Validlecteur.php">
<table>
<tr>
<td>Nom  </td>
<td>:</td>
<td><input type="text" name="name"/></td>
</tr>
<tr>
<td>Prenom      </td>
<td>:</td>
<td><input type="text" name="prenom"/></td>
</tr>
<tr>
<td>Adresse      </td>
<td>:</td>
<td><input type="text" name="adresse"/></td>
</tr>
<td>Mot de passe      </td>
<td>:</td>
<td><input type="password" name="password"/></td>
</tr>
<tr>
<td>Ville        </td>
<td>:</td>
<td><input type="text" name="ville"/></td>
</tr>
<tr>
<td>Code Postal </td>
<td>:</td>
<td><input type="text" name="code"/></td>
</tr>
<tr>
<td>
<input type="submit" name="enregistrer" value="enregistrer"/>
</td>
</tr>
</table>
</form>
</body>
</html>
<?php 
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