<?php
include("includes/connexion.inc.php");
$name=$_POST['id'];
$ip = $pdo->prepare("SELECT ip_vote FROM messages WHERE id= :id");
$ip->bindParam(":id", $_POST["id"]);
$ip->execute();
$dataip=$ip->fetch();
if($dataip['ip_vote']!=$_COOKIE['utilisateur']&&isset($_COOKIE['utilisateur'])){
$modifdata = $pdo->prepare('UPDATE messages SET nb_vote = nb_vote+1,ip_vote = :ip_vote where id = :id ');
$modifdata->bindParam(':id', $_POST['id']);
$modifdata->bindParam(':ip_vote', $_COOKIE['utilisateur']);
$modifdata->execute();
/////////////
$supp = $pdo->prepare("SELECT nb_vote FROM messages WHERE id= :id");
$supp->bindParam(":id", $_POST["id"]);
////////////
$supp->execute();
$data=$supp->fetch();
echo $data['nb_vote'];
}else{
    echo "erreur";
}
?>