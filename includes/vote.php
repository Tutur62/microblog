<?php
include("connexion.inc.php");
// Récupère l'id de l'utilisateur et le compare avec celui du dernier votre
$name=$_POST['id'];
$idvote = $pdo->prepare("SELECT ip_vote FROM messages WHERE id= :id");
$idvote->bindParam(":id", $_POST["id"]);
$idvote->execute();
$dataip=$idvote->fetch();
if($dataip['ip_vote']!=$_COOKIE['utilisateur']&&isset($_COOKIE['utilisateur'])){
// Ajoute le vote et l'id de l'utilisateur à la base de données
$ajoutvote = $pdo->prepare('UPDATE messages SET nb_vote = nb_vote+1,ip_vote = :ip_vote where id = :id ');
$ajoutvote->bindParam(':id', $_POST['id']);
$ajoutvote->bindParam(':ip_vote', $_COOKIE['utilisateur']);
$ajoutvote->execute();
//Récupère le nombre de vote pour l'afficher
$nbvote = $pdo->prepare("SELECT nb_vote FROM messages WHERE id= :id");
$nbvote->bindParam(":id", $_POST["id"]);
$nbvote->execute();
$data=$nbvote->fetch();
echo $data['nb_vote'];
}else{
    //Si l'id à déjà voté envoie une erreur qui sera interprété par le Javascript
    echo "erreur";
}
?>