<?php
//Supprime le cookie
setcookie('utilisateur',"",time()-9600,"/");
setcookie('utilisateur',"",time()-9600,"/includes");
header("location:../index.php");
?>