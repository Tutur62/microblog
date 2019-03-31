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
$connexion = "Connexion";
if(isset($_COOKIE['utilisateur'])){
    $connexion = "Deconnexion";
}
$smarty->assign(
    "connexion",
    $connexion,
    true
); 
$smarty->display('connexion.tpl');
