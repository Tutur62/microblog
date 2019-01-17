<?php
include("includes/connexion.inc.php");
include("includes/haut.inc.php");
?>
<section>
        <<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="connexion.php" role="login" id="connexion">
          <input type="text" name="pseudo" placeholder="Pseudo" class="form-control input-lg" />
          <div class="red erreur" style="display:none">Le champ est vide</div>
          <input type="password" class="form-control input-lg" name="password" placeholder="Password"/>
          <div class="red erreur" style="display:none">Le champ est vide</div>
          <div class="pwstrength_viewport_progress"></div>
          <br>
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Connexion</button>
        </form>
        <div class="form-links">
        </div>
      </section>  
      </div>
      <div class="col-md-4"></div>
  </div>
  <p>
  </p>     
</div>
    </section>
<?php
if(isset($_POST['pseudo']) && isset($_POST['password'])){
$pseudo=$_POST['pseudo'];
$mdp=$_POST['password'];
$query=$pdo->prepare('SELECT pseudo,id FROM utilisateur WHERE pseudo = :pseudo AND mdp = :mdp');
$query->bindValue(':pseudo',$pseudo);
$query->bindValue(':mdp',md5($mdp));
$query->execute();
$data=$query->fetch();
$count = $query->rowCount();
if($count==0){
    header("location:connexion.php");
}else{  $query->bindValue(':pseudo',$pseudo);
  setcookie("utilisateur", $data['id'], time()+3600);
  header("location:index.php");
}
include("includes/bas.inc.php");
}
?>
</body>

</html>
