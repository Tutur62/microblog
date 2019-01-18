<?php
include("connexion.inc.php");
$date = time();
if(isset($_COOKIE['utilisateur'])){
    // Récupère l'action pour ensuite modifier en base de données
if(isset($_GET['action'])){ 
// Supprime le message avec l'id du message
$supp = $pdo->prepare("DELETE FROM messages WHERE id= :id");
$supp->bindParam(":id", $_GET["id"]);
$supp->execute();
}else{
// Insère le message
if(!isset($_POST["id"])){
$insertion = $pdo->prepare("INSERT INTO messages (contenu,date,auteur_id) VALUES (?,?,?)");
$insertion->execute(array($_POST['message'],time(),$_COOKIE['utilisateur']));
}else{
// Met à jour le message avec l'id de celui-ci
$modifdata = $pdo->prepare('UPDATE messages SET contenu = :contenu,date = :date where id = :id ');
$modifdata->bindParam(':contenu', $_POST['message']); 
$modifdata->bindParam(':date', $date);
$modifdata->bindParam(':id', $_POST['id']);
$modifdata->execute();
}
}
}
header("Location: ../index.php");