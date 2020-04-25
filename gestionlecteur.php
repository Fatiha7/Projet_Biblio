<html>
<head>
<meta charset=utf-8>
<style>
th{
    color:red;
}
</style>
</head>
<body>
<h1>Gestion du lecteur</h1>
<p>Bienvenue</p>
<h4>voici la liste des ouvrages disponibles a la rservation</h4>
<form method="get">
                <table border=1 cellspacing=0 >
                    <tr>
                        <th>codelivre</th>
                        <th>nomauteur</th> 
                        <th>prenomAuteur </th>
                        <th>titre</th>
                        <th>categorie</th>
                        <th>ISBN</th>
                        <th></th>
                    </tr>
                    <?php
                    session_start();
                    require 'data_base.php';
                    include 'data_base.php';
                    $select=$conn->query("select * from livres");
                    while($s=$select->fetch(PDO::FETCH_OBJ)){
                    ?>
                    <tr>
                        <td><?= $s->livcode;?></td>
                        <td><?= $s->livnomaut;?></td>
                        <td><?= $s->livprenomaut;?></td>
                        <td><?= $s->livtitre;?></td>
                        <td><?= $s->livcategorie;?></td>
                        <td><?= $s->livISBN;?></td>
                        <td><a href="gestionlecteur.php?action=reserver<?= $s->livcode;?>">Reserver</td>
                    </tr>    
                    <?php
                    }
                    ?>
</table>
</form>                    
</body>
</html>


<html>
<body>    
<h3>voici la liste de vos reservations</h3>
<table border=1 cellspacing=0 >
                    <tr>
                        <th>codelivre</th>
                        <th>nomauteur</th> 
                        <th>prenomAuteur </th>
                        <th>titre</th>
                        <th>categorie</th>
                        <th>ISBN</th>
                        
                    </tr>
                    <?php
                    
                    $select=$conn->query("select * from livres");
                    while($s=$select->fetch(PDO::FETCH_OBJ)){
                        if($_GET['action']==='reserver'.$s->livcode){ 
                    ?>
                    <tr>
                        <td><?= $s->livcode;?></td>
                        <td><?= $s->livnomaut;?></td>
                        <td><?= $s->livprenomaut;?></td>
                        <td><?= $s->livtitre;?></td>
                        <td><?= $s->livcategorie;?></td>
                        <td><?= $s->livISBN;?></td>
                    </tr>    
                    <?php
                    }}
                    ?>
