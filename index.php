<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require './libs/Smarty.class.php';
require './includes/connexion.inc.php';
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;

if(isset($_GET['id'])&&isset($_GET['action'])){
    if($_GET['action']=="modif"){
        $action="Modifier";
        $req = $pdo->prepare('select * from messages where id=:id');
        $req->BindParam(':id',$_GET['id']);
        $req->execute();
        $modif=$req->fetch();
    }else{
        $action="Envoyer";
        $modif =null;
    }
}else{
    $action="Envoyer";
    $modif =null;
}
$smarty->assign(
    "action",$action,
    true
);   
$smarty->assign(
    "modif",$modif,
    true
);   
$connexion = "Connexion";
if(isset($_COOKIE['utilisateur'])){
    $connexion = "Deconnexion";
}
$smarty->assign(
    "connexion",
    $connexion,
    true
); 
$query="SELECT * ,(select pseudo from utilisateur where utilisateur.id = messages.auteur_id) as pseudo FROM messages order by date desc";
$stmt=$pdo->query($query);
$data=$stmt->fetchAll();
    $smarty->assign(
        "message",
        $data,
        true
    );   
$smarty->display('index.tpl');
