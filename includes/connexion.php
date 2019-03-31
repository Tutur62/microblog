<?php
include("connexion.inc.php");
// Vérifie si les données sont bien envoyées
if(isset($_POST['pseudo']) && isset($_POST['password'])){
    $pseudo=$_POST['pseudo'];
    $mdp=$_POST['password'];
// Compare les valeurs avec les données de la base
    $query=$pdo->prepare('SELECT pseudo,id FROM utilisateur WHERE pseudo = :pseudo AND mdp = :mdp');
    $query->bindValue(':pseudo',$pseudo);
// Compare le mdp crypté avec celui envoyé
    $query->bindValue(':mdp',md5($mdp));
    $query->execute();
    $data=$query->fetch();
    $count = $query->rowCount();
//Si il y'a eu correspondance renvoie vers la page d'accueil et stocke l'id dans un cookie
if($count==0){
    header("location: ../connexion.php");
}else{  $query->bindValue(':pseudo',$pseudo);
  setcookie("utilisateur", $data['id'], time()+10800);
  header("location: ../index.php");
}
}
?>