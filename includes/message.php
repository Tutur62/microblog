<?php
include("connexion.inc.php");
$uploaddir = '../files/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
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
$query="SELECT * FROM messages group by date desc";
$stmt=$pdo->query($query);
$data=$stmt->fetch();
if (move_uploaded_file($data[0]["id"], $uploadfile)) {
    echo "Le fichier est valide, et a été téléchargé
           avec succès. Voici plus d'informations :\n";
} else {
    echo "Attaque potentielle par téléchargement de fichiers.
          Voici plus d'informations :\n";
}

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
header("Location: ../indexbis.php");