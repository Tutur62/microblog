{include file="header.tpl" title=foo}
<section>
        <<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="./includes/connexion.php" role="login" id="connexion">
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
{include file="footer.tpl"}
</body>

</html>