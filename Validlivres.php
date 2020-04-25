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
<h1>Validation d'un livre</h1>
<?php

if (isset($_POST['nameaut']) && isset($_POST['prenomaut']) && isset($_POST['titre'])&& isset($_POST['cat'])&& isset($_POST['ISBN'])) {
    echo'<table><tr>';
    echo '<td>Nom de l\'auteur</td><td>:</td><td class="green">'.$_POST['nameaut'].'</td></tr><br>';
    echo '<tr><td>prenom de l\'auteur</td><td>:</td><td class="green">'.$_POST['prenomaut'].'</td></tr><br>';
    echo '<tr><td>titre</td><td>:</td><td class="green">'.$_POST['titre'].'</td></tr><br>';
    echo '<tr><td>categorie</td><td>:</td><td class="green">'.$_POST['cat'].'</td></tr><br>';
    echo '<tr><td>Numero ISBN</td><td>:</td><td class="green">'.$_POST['ISBN'].'</td></tr></table><br>';

}


?>
</body>
</html>