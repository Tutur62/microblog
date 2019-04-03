<?php
/* Smarty version 3.1.33, created on 2019-04-03 18:21:26
  from 'C:\wamp64\www\microblog\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca4f9a6ad3fe9_19554328',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '36cf16ad38168fcfe33484b7d5d548548b11c05f' => 
    array (
      0 => 'C:\\wamp64\\www\\microblog\\templates\\index.tpl',
      1 => 1554068292,
      2 => 'file',
    ),
    'd16cd53e1f8da30038cec28361e13705c9de408c' => 
    array (
      0 => 'C:\\wamp64\\www\\microblog\\templates\\header.tpl',
      1 => 1554313705,
      2 => 'file',
    ),
    '766949b83847faf019cd57421efe7caadd436889' => 
    array (
      0 => 'C:\\wamp64\\www\\microblog\\templates\\footer.tpl',
      1 => 1554315631,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5ca4f9a6ad3fe9_19554328 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Micro blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <script src="js/script.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<script>
console.log("Hello world");
</script>
<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">Micro blog</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class='page-scroll'>
                    <a href='<?php echo $_smarty_tpl->tpl_vars['connexion']->value;?>
.php'><?php echo $_smarty_tpl->tpl_vars['connexion']->value;?>
</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">Le fil</span>
                        <hr class="star-light">
                    </div>
                </div>
            </div>
        </div>
    </header>

<body>
<section>
        <div class="container">
            <div class="row">
                <form action="./includes/message.php" method="post" enctype="multipart/form-data">
                    <div class="col-sm-10">
                        <div class="form-group">
                    <?php if ($_smarty_tpl->tpl_vars['action']->value == 'Modifier') {?>
                    <input name='id' type='hidden' value=<?php echo $_smarty_tpl->tpl_vars['modif']->value['id'];?>
>
                    <!-- Selectionne l'id du message à modifier et le stock dans un champ caché -->
                    <!-- Affiche le contenu qui va être modifier ou un champ vide en cas de nouveau message -->
                    <textarea id='message' name='message' class='form-control' placeholder='Message'><?php echo $_smarty_tpl->tpl_vars['modif']->value['contenu'];?>
</textarea>
                       </div>
                    </div>
                    <div class="col-sm-2">
                    <input name="userfile" type="file"/>
                    <?php } else { ?>
                    <textarea id='message' name='message' class='form-control' placeholder='Message'></textarea>
                       </div>
                    </div>
                    <div class="col-sm-2">
                    <input name="userfile" type="file" required/>
                    <?php }?>   
                
                    <!-- Change l'apparence du bouton et l'action à effectuer  -->
                    <button type='submit' class='btn btn-success btn-lg'><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
</button>
                    </div>
                </form>
            </div>

            <div class="row">
                <!-- Récupère le nombre de page pour la pagination -->
                <div class="col-md-12 messages" NbPage=<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 page="0">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['message']->value, 'myId', false, NULL, 'test', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value) {
?>
                        <blockquote class="blocmessage">
                        <p><?php echo $_smarty_tpl->tpl_vars['myId']->value['contenu'];?>
</p>
                        <img src="./files/<?php echo $_smarty_tpl->tpl_vars['myId']->value['id'];?>
_thump" onerror="this.style.display='none'"/>
                        <footer><?php echo $_smarty_tpl->tpl_vars['myId']->value['pseudo'];?>
</footer>
                        <a href='index.php?id=<?php echo $_smarty_tpl->tpl_vars['myId']->value['id'];?>
&action=modif' class='button'>Modifier</a>
                        <br>
                        <a href="./includes/message.php?action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['myId']->value['id'];?>
" class='button'>Supprimer</a>
                        <button class='jaime' data-id="<?php echo $_smarty_tpl->tpl_vars['myId']->value['id'];?>
" >J'aime <?php echo $_smarty_tpl->tpl_vars['myId']->value['nb_vote'];?>
</button>
                        
                        </blockquote>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
  <!-- Footer -->
  <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</p>
                    </div>
                    <div class="footer-col col-md-4">
                        
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>A propos</h3>
                        <p>Micro blog est une application PHP basée sur le thème <a href="https://startbootstrap.com/template-overviews/freelancer/">Freelancer</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 center">
                        <div class="center title">Réseaux Sociaux</div>
                       <a href="#" title="L'édito" id="twitter" class="center"><span></span></a>
                       <a href="#" title="L'édito" id="facebook" class="center"><span></span></a>
                       <a href="#" title="L'édito" id="youtube" class="center"><span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
</body><?php }
}
