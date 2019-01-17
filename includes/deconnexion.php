<?php
setcookie('utilisateur',"",time()-9600,"/PHP/microblog/","localhost");
header("location:../index.php");
?>