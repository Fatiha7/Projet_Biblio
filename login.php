<?php
session_start();
require 'data_base';
include 'data_base';
if(isset($_POST["login"])){
    if(empty($_POST["username"]) || empty($_POST["password"])){
      $message="<label>All field is required</label>";
      
    }
    else{
      $query="select lecnom,lecmotdepasse from lecteurs where lecnom= :username and lecmotdepasse= :password";
      $satetment=$conn->prepare($query);
      $satetment->execute(

                array(
                   'username'=> $_POST["username"],
                   'password'=>$_POST["password"] 
                )
          );
          $count=$satetment->rowCount();
          if($count>0)
          {
            $_SESSION["username"]=$_POST["username"];
            header("Location:gestionlecteur.php");
          }
          else{
            $message='<label>Username or Password is wrong</label>';
            header("location:lecteurForm.php");
          }
    }
  }
?>
<html>
<head>
<title></title>
<style>
</style>
</head>
<body>
<h1>Validation d'un lecteur</h1>
<form method="post">
<table>
<tr>
<td>Nom du lecteur </td>
<td>:</td>
<td><input type="text" name="username"/></td>
</tr>
<tr>
<td>Mot de passe      </td>
<td>:</td>
<td><input type="password" name="password"/></td>
</tr>
<tr>
<td>
<input type="submit" name="login" value="login"/>
</td>
</tr>
</table>
</form>
</body>
</html>