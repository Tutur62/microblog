<?php
include("includes/connexion.inc.php");
include("includes/haut.inc.php");
?>
<section>
        <div class="container">
            <div class="row">
                <form action="./includes/message.php" method="post">
                    <div class="col-sm-10">
                        <div class="form-group">
                    <?php
                        if(isset($_GET['id'])){
                            $req = $pdo->prepare('select * from messages where id=:id');
                            $req->BindParam(':id',$_GET['id']);
                            $req->execute();
                            $data=$req->fetch();
                            echo "<input name='id' type='hidden' value=".$_GET['id'].">";
                        }
                    ?>
                    <textarea id='message' name='message' class='form-control' placeholder='Message'><?php if(isset($_GET['id'])){echo $data['contenu'];} ?></textarea>
                        </div>
                    </div>
                    <div class="col-sm-2">
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
                <div class="col-md-12 messages">
                </div>
            </div>
            <div>
                <button class="page" data-value="0">Précédente</button>
                <button class="page" data-value="1">Suivante</button>
            </div>
        </div>
    </section>
<?php
include("includes/bas.inc.php");
?>
</body>

</html>
