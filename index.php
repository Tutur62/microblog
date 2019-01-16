<?php
include("includes/connexion.inc.php");
include("includes/haut.inc.php");
?>
<section>
        <div class="container">
            <div class="row">
                <form action="message.php" method="post">
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
                <div class="col-md-12">
                    <?php
                    $query="SELECT *FROM messages group by date desc";
                        $stmt=$pdo->query($query);
                        while($data=$stmt->fetch()){
                        $query=$pdo->prepare('SELECT pseudo FROM utilisateur WHERE id = :auteur_id');
                        $query->bindValue(':auteur_id',$data['auteur_id']);
                        $query->execute();
                        $data2=$query->fetch();
                        echo "<blockquote>";
                        echo"<p>".htmlspecialchars($data['contenu'])."</p>";
                        echo "<footer>".date("Y-m-d H:i",$data ['date'])."-".$data2['pseudo']."</footer>";
                        echo "<a href='index.php?id=".$data['id']."&action=modif' class='button'>Modifier</a>";
                        echo "<br>";
                        echo "<a href='message.php?id=".$data['id']."&action=supprimer' class='button'>Supprimer</a>";
                        echo "<button class='jaime' data-id=".$data['id']." >J'aime - ".$data['nb_vote']."</button>";
                        echo "</blockquote>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php
include("includes/bas.inc.php");
?>
</body>

</html>
