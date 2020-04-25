<html>
<head>
<meta charset=utf-8>
<style>
table{
    border:1;
}
</style>
</head>
<body>
<h1>Réserver un livre</h1>
<p>Vous désirez réserver le livre suivant :</p>
<form action='ConfirmtionRéservation.php' method='post'> 
                <table cellspacing=0 >
                <?php
                    session_start();
                    include 'data_base.php';
                    require 'data_base.php';
                    $select=$conn->query("select * from livres");
                    while($s=$select->fetch(PDO::FETCH_OBJ)){
                        if($_GET['action']==='reserver'.$s->livcode){
                            
                    ?>
                    <tr>
                        <td>code du livre</td>
                        <td><?= $s->livcode;?></td>
                    </tr>
                    <tr>
                        <td>nom de l'auteur</td> 
                       <td><?= $s->livnomaut;?></td>
                    </tr>
                    <tr>
                        <td>prenom de l'Auteur</td> 
                       <td><?= $s->livprenomaut;?></td>
                    </tr>
                    <tr>
                       <td>titre</td>
                       <td><?= $s->livtitre;?></td>
                    </tr>
                    <tr>
                      <td>categorie</td>
                      <td><?= $s->livcategorie;?></td>
                    </tr>
                    <tr>            
                        <td>ISBN</td> 
                        <td><?= $s->livISBN;?></td>
                    </tr> 
                    <tr><td><input type="submit" name="confirmer" value="confirmer"/></td></tr>  
                    <?php
                    }}
                    ?>
</table>
</form>                    
</body>
</html>
