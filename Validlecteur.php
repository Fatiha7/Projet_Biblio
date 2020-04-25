<html>
<head>
<title></title>
<style>
td.green{
    color:green;
}
hr{
    border:2px;
}
</style>
</head>
<body>
<h1>Validation d'un lecteur</h1>
<hr>
<?php


if (isset($_POST['name']) && isset($_POST['prenom']) && isset($_POST['adresse'])&&isset($_POST['password'])&& isset($_POST['ville'])&& isset($_POST['code'])) {
    echo'<table><tr>';
    echo '<td>Nom</td><td>:</td><td class="green">'.$_POST['name'].'</td></tr><br>';
    echo '<tr><td>prenom</td><td>:</td><td class="green">'.$_POST['prenom'].'</td></tr><br>';
    echo '<tr><td>Adresse</td><td>:</td><td class="green">'.$_POST['adresse'].'</td></tr><br>';
    echo '<tr><td>Ville</td><td>:</td><td class="green">'.$_POST['ville'].'</td></tr><br>';
    echo '<tr><td>Code Postal</td><td>:</td><td class="green">'.$_POST['code'].'</td></tr></table><br>';
    echo 'Vous êtes enregistré dans la base de la bibliothéque.<br>';
    echo 'vous avez maintenant la possibilité de réserver des livres ou vous <a href="gestionlecteur.php">identifiant ici</a><br>';
}


?>
</body>
</html>