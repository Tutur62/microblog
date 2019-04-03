<?php
/* Smarty version 3.1.33, created on 2019-04-03 17:51:45
  from 'C:\wamp64\www\microblog\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca4f2b17f6883_26581503',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '36cf16ad38168fcfe33484b7d5d548548b11c05f' => 
    array (
      0 => 'C:\\wamp64\\www\\microblog\\templates\\index.tpl',
      1 => 1554068292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ca4f2b17f6883_26581503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12892860075ca4f2b1754571_66175189';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<body>
<section>
        <div class="container">
            <div class="row">
                <form action="./includes/message.php" method="post" enctype="multipart/form-data">
                    <div class="col-sm-10">
                        <div class="form-group">
                    <?php echo '/*%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/<?php if ($_smarty_tpl->tpl_vars[\'action\']->value == \'Modifier\') {?>/*/%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/';?>

                    <input name='id' type='hidden' value=<?php echo '/*%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/<?php echo $_smarty_tpl->tpl_vars[\'modif\']->value[\'id\'];?>
/*/%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/';?>
>
                    <!-- Selectionne l'id du message à modifier et le stock dans un champ caché -->
                    <!-- Affiche le contenu qui va être modifier ou un champ vide en cas de nouveau message -->
                    <textarea id='message' name='message' class='form-control' placeholder='Message'><?php echo '/*%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/<?php echo $_smarty_tpl->tpl_vars[\'modif\']->value[\'contenu\'];?>
/*/%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/';?>
</textarea>
                       </div>
                    </div>
                    <div class="col-sm-2">
                    <input name="userfile" type="file"/>
                    <?php echo '/*%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/<?php } else { ?>/*/%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/';?>

                    <textarea id='message' name='message' class='form-control' placeholder='Message'></textarea>
                       </div>
                    </div>
                    <div class="col-sm-2">
                    <input name="userfile" type="file" required/>
                    <?php echo '/*%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/<?php }?>/*/%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/';?>
   
                
                    <!-- Change l'apparence du bouton et l'action à effectuer  -->
                    <button type='submit' class='btn btn-success btn-lg'><?php echo '/*%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/<?php echo $_smarty_tpl->tpl_vars[\'action\']->value;?>
/*/%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/';?>
</button>
                    </div>
                </form>
            </div>

            <div class="row">
                <!-- Récupère le nombre de page pour la pagination -->
                <div class="col-md-12 messages" NbPage=<?php echo '/*%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/<?php echo $_smarty_tpl->tpl_vars[\'count\']->value;?>
/*/%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/';?>
 page="0">
                <?php echo '/*%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'message\']->value, \'myId\', false, NULL, \'test\', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'myId\']->value) {
?>/*/%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/';?>

                        <blockquote class="blocmessage">
                        <p><?php echo '/*%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/<?php echo $_smarty_tpl->tpl_vars[\'myId\']->value[\'contenu\'];?>
/*/%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/';?>
</p>
                        <img src="./files/<?php echo '/*%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/<?php echo $_smarty_tpl->tpl_vars[\'myId\']->value[\'id\'];?>
/*/%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/';?>
_thump" onerror="this.style.display='none'"/>
                        <footer><?php echo '/*%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/<?php echo $_smarty_tpl->tpl_vars[\'myId\']->value[\'pseudo\'];?>
/*/%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/';?>
</footer>
                        <a href='index.php?id=<?php echo '/*%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/<?php echo $_smarty_tpl->tpl_vars[\'myId\']->value[\'id\'];?>
/*/%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/';?>
&action=modif' class='button'>Modifier</a>
                        <br>
                        <a href="./includes/message.php?action=supprimer&id=<?php echo '/*%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/<?php echo $_smarty_tpl->tpl_vars[\'myId\']->value[\'id\'];?>
/*/%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/';?>
" class='button'>Supprimer</a>
                        <button class='jaime' data-id="<?php echo '/*%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/<?php echo $_smarty_tpl->tpl_vars[\'myId\']->value[\'id\'];?>
/*/%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/';?>
" >J'aime <?php echo '/*%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/<?php echo $_smarty_tpl->tpl_vars[\'myId\']->value[\'nb_vote\'];?>
/*/%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/';?>
</button>
                        
                        </blockquote>
                  <?php echo '/*%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>/*/%%SmartyNocache:12892860075ca4f2b1754571_66175189%%*/';?>

                  </div>
                </div>
            </div>
            <div>
                <!-- Permet de changer de page, 0 signifiant précédent et 1 suivant -->
                <button class="page" data-value="0" style="display: none;">Précédente</button>
                <button class="page" data-value="1">Suivante</button>
            </div>
        </div>
    </section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body><?php }
}
