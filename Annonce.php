<?php include "inc\header.php" ?>

<div class="admin">  

            <form method="POST" action="insertion.php" enctype="multipart/form-data">

                  <h2>Nouvelle annonce</h2> 
                

                <div class="form-group">
                    <label for="titre">Titre de l'annonce</label>
                    <input type="texte" class="form-control" id="prenom" name="prenom" >
                </div>

                <div class="form-group">
                    <label for="titre">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="titre">Prix</label>
                    <input type="number" class="form-control" id="nom" name="nom">
                </div>

                <div class="form-group">
                    <label for="contenu">Url de la première photo</label>
                    <input type="url" class="form-control" id="url" name="url" placeholder="https://media.gettyimages.com/photos/mallard-duck-walking-in-ice-picture-id155358150?s=2048x2048"></textarea>
                </div>
                <div class="form-group">

                    <label for="contenu">Url de la deuxième photo</label>
                    <input type="url" class="form-control" id="url" name="url" placeholder="https://media.gettyimages.com/photos/mallard-duck-walking-in-ice-picture-id155358150?s=2048x2048"></textarea>
                </div>
                <div class="form-group">

                    <label for="contenu">Url de la troisième photo</label>
                    <input type="url" class="form-control" id="url" name="url" placeholder="https://media.gettyimages.com/photos/mallard-duck-walking-in-ice-picture-id155358150?s=2048x2048"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Enregister</button>

</form>











<?php include "inc\jooter.php" ?>