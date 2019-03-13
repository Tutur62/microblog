<?php
/* Smarty version 3.1.33, created on 2019-02-27 14:57:29
  from 'C:\wamp64\www\microblog\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c76a55921a188_83829235',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '36cf16ad38168fcfe33484b7d5d548548b11c05f' => 
    array (
      0 => 'C:\\wamp64\\www\\microblog\\templates\\index.tpl',
      1 => 1551279445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c76a55921a188_83829235 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11417251515c76a5591b9327_81498922';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<body>
<section>
        <div class="container">
            <div class="row">
                <form action="./includes/message.php" method="post">
                    <div class="col-sm-10">
                        <div class="form-group">
                            <!-- Selectionne l'id du message à modifier et le stock dans un champ caché -->
                    <!-- Affiche le contenu qui va être modifier ou un champ vide en cas de nouveau message -->
                    <textarea id='message' name='message' class='form-control' placeholder='Message'></textarea>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <!-- Change l'apparence du bouton et l'action à effectuer  -->
                    <button type='submit' class='btn btn-success btn-lg'><?php echo '/*%%SmartyNocache:11417251515c76a5591b9327_81498922%%*/<?php echo $_smarty_tpl->tpl_vars[\'action\']->value;?>
/*/%%SmartyNocache:11417251515c76a5591b9327_81498922%%*/';?>
</button>
                    </div>
                </form>
            </div>

            <div class="row">
                <!-- Récupère le nombre de page pour la pagination -->
                <?php echo '/*%%SmartyNocache:11417251515c76a5591b9327_81498922%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'message\']->value, \'i\', false, \'myId\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'myId\']->value => $_smarty_tpl->tpl_vars[\'i\']->value) {
?>/*/%%SmartyNocache:11417251515c76a5591b9327_81498922%%*/';?>

                        <blockquote>
                        <p><?php echo '/*%%SmartyNocache:11417251515c76a5591b9327_81498922%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value;?>
/*/%%SmartyNocache:11417251515c76a5591b9327_81498922%%*/';?>
</p>
                        <footer><?php echo '/*%%SmartyNocache:11417251515c76a5591b9327_81498922%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value;?>
/*/%%SmartyNocache:11417251515c76a5591b9327_81498922%%*/';?>
</footer>
                        <a href='index.php?id=<?php echo '/*%%SmartyNocache:11417251515c76a5591b9327_81498922%%*/<?php echo $_smarty_tpl->tpl_vars[\'myId\']->value[\'id\'];?>
/*/%%SmartyNocache:11417251515c76a5591b9327_81498922%%*/';?>
' class='button'>Modifier</a>
                        <br>
                        <a href="message.php?id=<?php echo '/*%%SmartyNocache:11417251515c76a5591b9327_81498922%%*/<?php echo $_smarty_tpl->tpl_vars[\'myId\']->value[\'id\'];?>
/*/%%SmartyNocache:11417251515c76a5591b9327_81498922%%*/';?>
&action=supprimer" class='button'>Supprimer</a>
                        <button class='jaime' data-id=".$data['id']." >J'aime</button>
                        </blockquote>
                  <?php echo '/*%%SmartyNocache:11417251515c76a5591b9327_81498922%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>/*/%%SmartyNocache:11417251515c76a5591b9327_81498922%%*/';?>

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
