<?php
	// Initialiser la session
        session_start();
        
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">

    <title>Lebonkoin</title>

</head>
<header class="main-header">

    <div class="header-logo">

        <img src="img/logo.jpg" alt="logo">
    </div>
    <div class="header-menu">
        <nav>
            <ul>
                <li>
                    <a href="Annonce.php">Déposer une annonce</a>
                </li>
                <li>
                    <a href="index.php">Acceuil</a>
                </li>
                <li>
                    <a href="">Rechercher</a>
                </li>
                <li>
                    <button>
                        <i class="fas fa-search"></i>
                    </button>
                </li>
            </ul>
        </nav>
    </div>



    <?php
            if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
            ?>

                <div class="header-menu">
                    <nav>
                        <ul>
                            <li>
                                <a href="panier.php">Votre panier</a>
                            </li>
                            <li>
                                <a href="profil.php">Votre profil</a>
                            </li>
                            <li>
                                <a href="logout.php">Déconnexion</a>
                            </li>
                        </ul>
                    </nav>
                </div>

            <?php
            } else {
            ?>
            <div class="header-menu">
                    <nav>
                        <ul>
                            <li>
                                <a href="register.php">Inscription</a>
                            </li>
                            <li>
                                <a href="login.php">Connexion</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <?php } ?>


    <div class="container-fluid mt-5">

    </div>

</header>


<body>
    <?php include "data\data.php" ?>