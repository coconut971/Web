<?php include "inc\header.php" ?>
<?php


if (empty($_GET['user']) && empty($_SESSION['username'])) {
    header('Location: index.php');
    die;
}

if (!empty($_GET['user'])) {
    $userQuery = $dbh->prepare("SELECT id,username,email,tel,adresse,inscription,,avatar FROM users WHERE  username = '" . $_SESSION['username'] . "'");
    $userQuery->bindValue(':id', $_GET['user'], PDO::PARAM_INT);
    $userQuery->execute();
    $sqlUser = $userQuery->fetch();

    if (!$sqlUser) {
        header('Location: index.php');
        die;
    }
}

$user = !isset($sqlUser) ? $_SESSION['username'] : $sqlUser;


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
                <a class="nav-link text-dark font-weight-bold active" href="#list-about" id="list-profile-list" data-toggle="list" role="tab" aria-controls="home">À propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark font-weight-bold active" href="modprofil.php" id="list-profile-list" data-toggle="list" role="tab" aria-controls="home">Modifier mes informations</a>
            </li>
        </ul>

        <!-- About -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane pt-5 fade show active" id="list-about" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="col row">
                    <div class="col-12">
                        <h5 class="mb-1">Email :</h5>
                        <p class="text-justify"><?php $result = $pdo->query("SELECT * FROM users WHERE username = '" . $_SESSION['username'] . "'");
                                                while ($users = $result->fetch(PDO::FETCH_OBJ)) {

                                                    echo $users->email;
                                                } ?> </p>
                    </div>
                    <div class="col-12 row border border-bottom-0 border-right-0 border-left-0 pt-3">
                        <h5 class="mb-1">Téléphone :</h5>
                        <p class="text-justify"><?php $result = $pdo->query("SELECT * FROM users WHERE username = '" . $_SESSION['username'] . "'");
                                                while ($users = $result->fetch(PDO::FETCH_OBJ)) {

                                                    echo $users->tel;
                                                } ?> </p>

                    </div>
                    <div class="col-12 row border border-bottom-0 border-right-0 border-left-0 pt-3">
                        <h5 class="mb-1">Adresse :</h5>
                        <p class="text-justify"><?php $result = $pdo->query("SELECT * FROM users WHERE username = '" . $_SESSION['username'] . "'");
                                                while ($users = $result->fetch(PDO::FETCH_OBJ)) {

                                                    echo $users->adresse;
                                                } ?> </p>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include "inc\jooter.php" ?>