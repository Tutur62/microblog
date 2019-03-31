<?php
/* Smarty version 3.1.33, created on 2019-03-31 15:34:59
  from 'C:\wamp64\www\microblog\templates\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca0de23a17393_68386320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c586b8d5f037079f4b01730a45f8ff223bbc40f' => 
    array (
      0 => 'C:\\wamp64\\www\\microblog\\templates\\connexion.tpl',
      1 => 1554046466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ca0de23a17393_68386320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17723776685ca0de2399ab93_61057950';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
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
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html><?php }
}
