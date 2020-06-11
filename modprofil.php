<?php include "inc\header.php" ?>

<?php
if (empty($_GET['user']) && empty($_SESSION['username'])) {
    header('Location: index.php');
    die;
}

?>

<div class="row col-md-8 m-auto">

    <!-- Left side -->
    <div class="col-md-3 col-sm-12 mb-5">
        <div class="col-md-9 m-auto">
            <img src="img/utilisateur/<?php $result = $pdo->query("SELECT * FROM users WHERE username = '" . $_SESSION['username'] . "'");
                                        while ($users = $result->fetch(PDO::FETCH_OBJ)) {

                                            echo $users->avatar;
                                        } ?> " class="img-fluid rounded-circle img-thumbnail" alt="">
        </div>
        <h3 class="text-center mt-3"><?php $result = $pdo->query("SELECT * FROM users WHERE username = '" . $_SESSION['username'] . "'");
                                        while ($users = $result->fetch(PDO::FETCH_OBJ)) {

                                            echo $users->username;
                                        } ?> </h3>
        <ul class="list-group mt-5">
            <li class="list-group-item">Inscrit depuis : <?php $result = $pdo->query("SELECT * FROM users WHERE username = '" . $_SESSION['username'] . "'");
                                                            while ($users = $result->fetch(PDO::FETCH_OBJ)) {

                                                                echo $users->inscription;
                                                            } ?>
        </ul>
    </div>


    <!-- Right side-->
    <div class="col-md-9 col-sm-12 tab-content" id="nav-tabContent">

        <!-- Tab list -->
        <ul class="nav nav-tabs" id="list-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link text-dark font-weight-bold active" href="profil.php" id="list-profile-list" data-toggle="list" role="tab" aria-controls="home">À propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark font-weight-bold active" href="modprofil.php" id="list-profile-list" data-toggle="list" role="tab" aria-controls="home">Modifier mon pseudo</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link text-dark font-weight-bold active" href="modemail.php" id="list-profile-list" data-toggle="list" role="tab" aria-controls="home">Modifier mon email</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark font-weight-bold active" href="modadresse.php" id="list-profile-list" data-toggle="list" role="tab" aria-controls="home">Modifier mon adresse</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark font-weight-bold active" href="modtel.php" id="list-profile-list" data-toggle="list" role="tab" aria-controls="home">Modifier mon téléphone</a>
            </li>
        </ul>

        <!-- About -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane pt-5 fade show active" id="list-about" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="col row">
                    <form class="row col mb-5" action="modification_profil/insertionnom.php" method="post">
                    <div class="fo rm-group col-md-12 col-sm-12 row">
                            <label for="login" class="col-md-3 col-sm-12">Nom d'utilisateur </label>
                            <input type="text"  name="username" class="form-control  col-md-4 col-sm-12" id="username" placeholder="Username" value="" required>
                        </div>
                        <input type="submit" name="submit" value="Mettre à jour" class="box-button" />
                    </form>
                </div>

            </div>
        </div>
        

    </div>
</div>
</div>



<?php include "inc\jooter.php" ?>