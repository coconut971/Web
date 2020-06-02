<?php include "inc/header.php" ?>

<div class="admin">  

            <form method="POST" action="insertion.php" enctype="multipart/form-data">

                  <h2> Veuillez rentrer vos informations</h2> 
                

                <div class="form-group">
                    <label for="titre">Prénom</label>
                    <input type="texte" class="form-control" id="prenom" name="prenom">
                </div>

                <div class="form-group">
                    <label for="titre">Nom</label>
                    <input type="Nom" class="form-control" id="nom" name="nom">
                </div>

                <div class="form-group">
                    <label for="titre">Adresse</label>
                    <input type="adresse" class="form-control" id="adresse" name="adresse">
                </div>

                </div>

                <div class="form-group">
                    <label for="titre">Téléphone </label>
                    <input type="Téléphone " class="form-control " id="telephone" name="telephone">
                </div>

                <div class="form-group">
                    <label for="titre">email </label>
                    <input type="email " class="form-control" id="email" name="email">
                </div>


                <div class="form-group">
                    <label for="contenu">URL image</label>
                    <input type="url" class="form-control" id="url" name="url"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Enregister</button>

</form>

<?php include "inc/jooter.php" ?>