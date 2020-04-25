<html>
<head>
<title></title>
<style>
td.green{
    color:green;
}
</style>
</head>
<body>
<h1>Validation d'un lecteur</h1>
<?php

if (isset($_POST['name']) && isset($_POST['prenom']) && isset($_POST['adresse'])&&isset($_POST['password'])&& isset($_POST['ville'])&& isset($_POST['code'])) {
    echo'<table><tr>';
    echo '<td>Nom</td><td>:</td><td class="green">'.$_POST['name'].'</td></tr><br>';
    echo '<tr><td>prenom</td><td>:</td><td class="green">'.$_POST['prenom'].'</td></tr><br>';
    echo '<tr><td>Adresse</td><td>:</td><td class="green">'.$_POST['adresse'].'</td></tr><br>';
    echo '<tr><td>Ville</td><td>:</td><td class="green">'.$_POST['ville'].'</td></tr><br>';
    echo '<tr><td>Code Postal</td><td>:</td><td class="green">'.$_POST['code'].'</td></tr></table><br>';

}


?>
</body>
</html>