{include file="header.tpl" title=foo}
<body>
<section>
        <div class="container">
            <div class="row">
                <form action="./includes/message.php" method="post" enctype="multipart/form-data">
                    <div class="col-sm-10">
                        <div class="form-group">
                    {if $action == 'Modifier'}
                    <input name='id' type='hidden' value={$modif.id}>
                    <!-- Selectionne l'id du message à modifier et le stock dans un champ caché -->
                    <!-- Affiche le contenu qui va être modifier ou un champ vide en cas de nouveau message -->
                    <textarea id='message' name='message' class='form-control' placeholder='Message'>{$modif.contenu}</textarea>
                       </div>
                    </div>
                    <div class="col-sm-2">
                    <input name="userfile" type="file"/>
                    {else}
                    <textarea id='message' name='message' class='form-control' placeholder='Message'></textarea>
                       </div>
                    </div>
                    <div class="col-sm-2">
                    <input name="userfile" type="file" required/>
                    {/if}   
                
                    <!-- Change l'apparence du bouton et l'action à effectuer  -->
                    <button type='submit' class='btn btn-success btn-lg'>{$action}</button>
                    </div>
                </form>
            </div>

            <div class="row">
                <!-- Récupère le nombre de page pour la pagination -->
                <div class="col-md-12 messages" NbPage={$count} page="0">
                {foreach from=$message item=myId name=test}
                        <blockquote class="blocmessage">
                        <p>{$myId.contenu}</p>
                        <img src="./files/{$myId.id}_thump" onerror="this.style.display='none'"/>
                        <footer>{$myId.pseudo}</footer>
                        <a href='index.php?id={$myId.id}&action=modif' class='button'>Modifier</a>
                        <br>
                        <a href="./includes/message.php?action=supprimer&id={$myId.id}" class='button'>Supprimer</a>
                        <button class='jaime' data-id="{$myId.id}" >J'aime {$myId.nb_vote}</button>
                        
                        </blockquote>
                  {/foreach}
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
{include file="footer.tpl"}
</body>