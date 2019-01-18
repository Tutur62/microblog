<?php
                    include("connexion.inc.php");
                    $tmp = $_POST["page"]*7;
                    // Renvoie les messages paginés qui envoyés dans le code html
                    $query="SELECT * FROM messages group by date asc limit ".$tmp.",7";
                        $stmt=$pdo->query($query);
                        //Parcours le tableau de message et affiche les informations
                        while($data=$stmt->fetch()){
                        //Récupère l'id de l'auteur et selectionne le pseudo dans la table utilisateur
                        $query=$pdo->prepare('SELECT pseudo FROM utilisateur WHERE id = :auteur_id');
                        $query->bindValue(':auteur_id',$data['auteur_id']);
                        $query->execute();
                        $data2=$query->fetch();
                        echo "<blockquote>";
                        echo"<p>".htmlspecialchars($data['contenu'])."</p>";
                        echo "<footer>".date("Y-m-d H:i",$data ['date'])."-".$data2['pseudo']."</footer>";
                        if(isset($_COOKIE['utilisateur'])){
                        echo "<a href='index.php?id=".$data['id']."&action=modif' class='button'>Modifier</a>";
                        echo "<br>";
                        echo "<a href='./includes/message.php?id=".$data['id']."&action=supprimer' class='button'>Supprimer</a>";
                        echo "<button class='vote' data-id=".$data['id']." >J'aime - ".$data['nb_vote']."</button>";
                        }
                        echo "</blockquote>";
                        }
                    ?>