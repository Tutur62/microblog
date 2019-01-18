<?php
//Supprime le cookie
setcookie('utilisateur',"",time()-9600,"/","localhost");
header("location:../index.php");
?>