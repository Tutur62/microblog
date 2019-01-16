<?php
setcookie('utilisateur',"",time()-9600,"/PHP/","localhost");
header("location:../index.php");
?>