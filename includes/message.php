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
$query="SELECT id FROM messages group by date desc";
$stmt=$pdo->query($query);
$data=$stmt->fetch();
//ezrtbhhtrhe
if(is_array($_FILES)) {
    $file = $_FILES['userfile']['tmp_name']; 
    $sourceProperties = getimagesize($file);
    $fileNewName = $data["id"] ;
    $folderPath = "../files/";
    $ext = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
    $imageType = $sourceProperties[2];
    switch ($imageType) {
        case IMAGETYPE_PNG:
            $imageResourceId = imagecreatefrompng($file); 
            $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
            imagepng($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
            break;
        case IMAGETYPE_GIF:
            $imageResourceId = imagecreatefromgif($file); 
            $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
            imagegif($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
            break;
        case IMAGETYPE_JPEG:
            $imageResourceId = imagecreatefromjpeg($file); 
            $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
            imagejpeg($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
            break;
        default:
            echo "Invalid Image type.";
            exit;
            break;
    }
    move_uploaded_file($file, $folderPath. $fileNewName. ".". $ext);
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
function imageResize($imageResourceId,$width,$height) {
    $targetWidth =200;
    $targetHeight =200;
    $targetLayer=imagecreatetruecolor($targetWidth,$targetHeight);
    imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);
    return $targetLayer;
}
header("Location: ../index.php");