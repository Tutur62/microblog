<?php
include("connexion.inc.php");
if(isset($_POST['pseudo']) && isset($_POST['password'])){
$pseudo=$_POST['pseudo'];
$mdp=$_POST['password'];
$query=$pdo->prepare('SELECT pseudo,id FROM utilisateur WHERE pseudo = :pseudo AND mdp = :mdp');
$query->bindValue(':pseudo',$pseudo);
$query->bindValue(':mdp',md5($mdp));
$query->execute();
$data=$query->fetch();
$count = $query->rowCount();
if($count==0){
    header("location: ../connexion.php");
}else{  $query->bindValue(':pseudo',$pseudo);
  setcookie("utilisateur", $data['id'], time()+3600);
  header("location: ../index.php");
}
}
?>