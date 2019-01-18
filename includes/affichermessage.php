<?php
                    include("connexion.inc.php");
                    $tmp = $_POST["page"]*7;
                    $query="SELECT * FROM messages group by date asc limit ".$tmp.",7";
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
                        echo "<a href='./includes/message.php?id=".$data['id']."&action=supprimer' class='button'>Supprimer</a>";
                        echo "<button class='jaime' data-id=".$data['id']." >J'aime - ".$data['nb_vote']."</button>";
                        echo "</blockquote>";
                        }
                    ?>