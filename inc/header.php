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
    <div class="menu">
        <li>
            <a>Mon compte</a>
            <ul>
                <?php if (!isset($_SESSION['id'])) { ?>
                    <li><a href="connection.php">Connexion</a></li>
                    <li><a href="Inscription.php">Inscription</a></li>
                <?php } else { ?>
                    <li><a href="moncompte.php"><?= $_SESSION['login']; ?></a></li>
                    <li><a href="deconnection.php">Déconnexion</a></li>
                <?php } ?>
            </ul>
        </li>



    </div>
</header>

<body>
    <?php include "data\data.php" ?>