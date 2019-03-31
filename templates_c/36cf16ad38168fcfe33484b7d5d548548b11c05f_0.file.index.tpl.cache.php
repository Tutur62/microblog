<?php
/* Smarty version 3.1.33, created on 2019-03-25 10:10:44
  from 'C:\wamp64\www\microblog\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c98a924a5a153_51107899',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '36cf16ad38168fcfe33484b7d5d548548b11c05f' => 
    array (
      0 => 'C:\\wamp64\\www\\microblog\\templates\\index.tpl',
      1 => 1553508641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c98a924a5a153_51107899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '798032985c98a9249e7d31_62991876';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<body>
<section>
        <div class="container">
            <div class="row">
                <form action="./includes/message.php" method="post" enctype="multipart/form-data">
                    <div class="col-sm-10">
                        <div class="form-group">
                            <!-- Selectionne l'id du message à modifier et le stock dans un champ caché -->
                    <!-- Affiche le contenu qui va être modifier ou un champ vide en cas de nouveau message -->
                    <textarea id='message' name='message' class='form-control' placeholder='Message'></textarea>
                        </div>
                    </div>
                    <div class="col-sm-2">
                    <input name="userfile" type="file" />
                    <!-- Change l'apparence du bouton et l'action à effectuer  -->
                    <button type='submit' class='btn btn-success btn-lg'><?php echo '/*%%SmartyNocache:798032985c98a9249e7d31_62991876%%*/<?php echo $_smarty_tpl->tpl_vars[\'action\']->value;?>
/*/%%SmartyNocache:798032985c98a9249e7d31_62991876%%*/';?>
</button>
                    </div>
                </form>
            </div>

            <div class="row">
                <!-- Récupère le nombre de page pour la pagination -->
                <?php echo '/*%%SmartyNocache:798032985c98a9249e7d31_62991876%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'message\']->value, \'myId\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'myId\']->value) {
?>/*/%%SmartyNocache:798032985c98a9249e7d31_62991876%%*/';?>

                        <blockquote>
                        <p><?php echo '/*%%SmartyNocache:798032985c98a9249e7d31_62991876%%*/<?php echo $_smarty_tpl->tpl_vars[\'myId\']->value[\'contenu\'];?>
/*/%%SmartyNocache:798032985c98a9249e7d31_62991876%%*/';?>
</p>
                        <footer><?php echo '/*%%SmartyNocache:798032985c98a9249e7d31_62991876%%*/<?php echo $_smarty_tpl->tpl_vars[\'myId\']->value[\'auteur_id\'];?>
/*/%%SmartyNocache:798032985c98a9249e7d31_62991876%%*/';?>
</footer>
                        <a href='index.php?id=<?php echo '/*%%SmartyNocache:798032985c98a9249e7d31_62991876%%*/<?php echo $_smarty_tpl->tpl_vars[\'myId\']->value[\'id\'];?>
/*/%%SmartyNocache:798032985c98a9249e7d31_62991876%%*/';?>
' class='button'>Modifier</a>
                        <br>
                        <a href="message.php?action=supprimer&id=<?php echo '/*%%SmartyNocache:798032985c98a9249e7d31_62991876%%*/<?php echo $_smarty_tpl->tpl_vars[\'myId\']->value[\'id\'];?>
/*/%%SmartyNocache:798032985c98a9249e7d31_62991876%%*/';?>
" class='button'>Supprimer</a>
                        <button class='jaime' data-id="<?php echo '/*%%SmartyNocache:798032985c98a9249e7d31_62991876%%*/<?php echo $_smarty_tpl->tpl_vars[\'myId\']->value[\'id\'];?>
/*/%%SmartyNocache:798032985c98a9249e7d31_62991876%%*/';?>
" >J'aime</button>
                        </blockquote>
                  <?php echo '/*%%SmartyNocache:798032985c98a9249e7d31_62991876%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>/*/%%SmartyNocache:798032985c98a9249e7d31_62991876%%*/';?>

                </div>
            </div>
            <div>
                <!-- Permet de changer de page, 0 signifiant précédent et 1 suivant -->
                <button class="page" data-value="0">Précédente</button>
                <button class="page" data-value="1">Suivante</button>
            </div>
        </div>
    </section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body><?php }
}
