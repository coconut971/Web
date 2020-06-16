<?php include "inc\header.php" ?>
<?php


if (empty($_GET['user']) && empty($_SESSION['username'])) {
    header('Location: index.php');
    die;
}?>

<?php 




if (!empty($_POST)) {
    $pdo = new PDO("mysql:host=localhost;dbname=registration", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $_POST["titre1"] = htmlentities($_POST["titre"], ENT_QUOTES);
    $_POST["descriptions1"] = htmlentities($_POST["descriptions"], ENT_QUOTES);
    $_POST["prix1"] = htmlentities($_POST["prix"], ENT_QUOTES);
    $_POST["url_img11"] = htmlentities($_POST["url_img1"], ENT_QUOTES);
    $_POST["url_img22"] = htmlentities($_POST["url_img2"], ENT_QUOTES);
    $_POST["url_img33"] = htmlentities($_POST["url_img3"], ENT_QUOTES);
    $result = $pdo->exec("INSERT INTO annonce (titre, descriptions, prix, url_img1, url_img2, url_img3) VALUES ('$_POST[titre]', '$_POST[descriptions]', '$_POST[prix]', '$_POST[url_img1]', '$_POST[url_img2]', '$_POST[url_img3]');");


    echo "Votre annonce à été publié";
}


?>

<div class="admin">  

            <form method="POST" action="" enctype="multipart/form-data">

                  <h2>Nouvelle annonce</h2> 
                

                <div class="form-group">
                    <label for="titre">Titre de l'annonce :</label>
                    <input type="text" class="form-control" id="titre" name="titre" >
                </div>

                <div class="form-group">
                    <label for="descriptions">Description :</label>
                    <input type="text" class="form-control" id="descriptions" name="descriptions" >
                </div>

                <div class="form-group">
                    <label for="prix">Prix :</label>
                    <input type="text" class="form-control" id="prix" name="prix">
                </div>

                <div class="form-group">
                    <label for="url_img1">Url de la première photo :</label>
                    <input type="url" class="form-control" id="url_img1" name="url_img1" placeholder="https://media.gettyimages.com/photos/mallard-duck-walking-in-ice-picture-id155358150?s=2048x2048"></textarea>
                </div>
                <div class="form-group">

                    <label for="url_img2">Url de la deuxième photo :</label>
                    <input type="url" class="form-control" id="url_img2" name="url_img2" placeholder="https://media.gettyimages.com/photos/mallard-duck-walking-in-ice-picture-id155358150?s=2048x2048"></textarea>
                </div>
                <div class="form-group">

                    <label for="url_img3">Url de la troisième photo :</label>
                    <input type="url" class="form-control" id="url_img3" name="url_img3" placeholder="https://media.gettyimages.com/photos/mallard-duck-walking-in-ice-picture-id155358150?s=2048x2048"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Enregister</button>

</div>

</form>











<?php include "inc\jooter.php" ?>