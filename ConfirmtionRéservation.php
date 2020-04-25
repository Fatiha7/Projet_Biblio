<html>
<head>
<title></title>

</head>
<body>
<h1>confirmtion de votre réservation</h1>
<?php

if(isset($_POST['confirmer'])){
    require 'data_base.php';
    include 'data_base.php';
    $select=$conn->query("select * from livres");
    while($s=$select->fetch(PDO::FETCH_OBJ)){
        if
$stmt = $conn->query("insert into emprunts (EMP_Numero, EMP_Date, EMP_DateRetour,EMP_CodeLivre,EMP_NumLecteur)
values (':numemp',:reserDate, :retDate, :CodeLivre,:NumLecteur,)");
$stmt->bindParam(':num', $num);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':adresse', $adresse);
$stmt->bindParam(':ville', $ville);
$stmt->bindParam(':code', $postal);
$stmt->execute();
  

}}
    
 
$conn = null;
 $select=$conn->query("select * from livres");
 while($s=$select->fetch(PDO::FETCH_OBJ)){
     if($_GET['action']==='reserver'.$s->livcode){
 $reserDate = date('Y-m-d');
 $retDate =date('Y-m-d', strtotime($reserDate.'+ 5 days'));
 $CodeLivre=$_POST['prenom'];
 $numemp ='Li'+ random_int(100, 999);
    echo '<p>votre réservation est confirmée sous le numero :'.$numemp.'</p><br>';
    echo '<p>Data de la réservation :'.$reserDate.'</p><br>';
    echo '<p>Date du retour : '.$retDate.'</p><br>';
?>
<p>vous pouvez revenir à la liste des livres disponible à la réservation en cliquant<a href="gestionlecteur.php">ici</a></p>
</body>
</html>
