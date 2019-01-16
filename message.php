<?php
include("includes/connexion.inc.php");
$date = time();
if(isset($_COOKIE['utilisateur'])){
if(isset($_GET['action'])){
$supp = $pdo->prepare("DELETE FROM messages WHERE id= :id");
$supp->bindParam(":id", $_GET["id"]);
$supp->execute();
}else{
if(!isset($_POST["id"])){
$stmt = $pdo->prepare("INSERT INTO messages (contenu,date,auteur_id) VALUES (?,?,?)");
$stmt->execute(array($_POST['message'],time(),$_COOKIE['utilisateur']));
}else{
$modifdata = $pdo->prepare('UPDATE messages SET contenu = :contenu,date = :date where id = :id ');
$modifdata->bindParam(':contenu', $_POST['message']); 
$modifdata->bindParam(':date', $date);
$modifdata->bindParam(':id', $_POST['id']);
$modifdata->execute();
}
}
}
header("Location: ./index.php");