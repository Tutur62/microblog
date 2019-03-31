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
        echo "<input name='action' type='hidden' value=".$action.">";
    }else{
        $action="envoyer";
    }
}else{
    $action="envoyer";
}
$smarty->assign(
    "action",
    $action,
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
$query="SELECT *FROM messages group by date desc";
$stmt=$pdo->query($query);
$data[]=$stmt->fetch();
    $smarty->assign(
        "message",
        $data,
        true
    );   
$smarty->display('index.tpl');
