<?php
include("./includes/connexion.inc.php");
include("./includes/haut.inc.php");
?>
<section>
        <div class="container">
            <div class="row">
                <form action="./includes/message.php" method="post">
                    <div class="col-sm-10">
                        <div class="form-group">
                            <!-- Selectionne l'id du message à modifier et le stock dans un champ caché -->
                    <?php
                        if(isset($_GET['id'])){
                            $req = $pdo->prepare('select * from messages where id=:id');
                            $req->BindParam(':id',$_GET['id']);
                            $req->execute();
                            $data=$req->fetch();
                            echo "<input name='id' type='hidden' value=".$_GET['id'].">";
                        }
                    ?>
                    <!-- Affiche le contenu qui va être modifier ou un champ vide en cas de nouveau message -->
                    <textarea id='message' name='message' class='form-control' placeholder='Message'><?php if(isset($_GET['id'])){echo $data['contenu'];} ?></textarea>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <!-- Change l'apparence du bouton et l'action à effectuer  -->
                        <?php
                        if(isset($_GET['id'])&&isset($_GET['action'])){
                        if($_GET['action']=="modif"){
                            $action="Modifier";
                            echo "<input name='action' type='hidden' value=".$action.">";
                        }else{
                            $action="envoyer";
                        }
                        echo "<button type='submit' class='btn btn-success btn-lg'>".$action."</button>";
                    }else{
                        echo "<button type='submit' class='btn btn-success btn-lg'>Envoyer</button>";
                    }
                        ?>
                    </div>
                </form>
            </div>

            <div class="row">
                <!-- Récupère le nombre de page pour la pagination -->
                <?php
                $req = $pdo->prepare('select * from messages');
                $req->BindParam(':id',$_GET['id']);
                $req->execute();
                $count = $req->rowCount()/7;
                echo '<div class="col-md-12 messages" NbPage="'.$count.'">';
                ?>
                </div>
            </div>
            <div>
                <!-- Permet de changer de page, 0 signifiant précédent et 1 suivant -->
                <button class="page" data-value="0">Précédente</button>
                <button class="page" data-value="1">Suivante</button>
            </div>
        </div>
    </section>
<?php
include("./includes/bas.inc.php");
?>
</body>

</html>
