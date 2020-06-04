<?php include "inc\header.php" ?>




<div class="wrapper">
    <?php if (isset($_SESSION['id'])) { ?>
        <h2>Identifiant</h2>
        <p>Votre identifiant est : <?= $_SESSION['login']; ?></p>
        <h4>Changer votre identifiant</h4>
        <form method="post" action="moncompte.php"><input type="text" name="changelogin"> <input type="submit" name="envoi" value="OK"></form> */ 

        <?php

        if (isset($_POST['changelogin']) and !empty($_POST['changelogin']) and isset($_POST['envoi'])) {

            $bdd->exec('update membre set pseudo = "' . $_POST['changelogin'] . '" where id = ' . $_SESSION['id']);
            echo "L'identifiant a été changé.";
            $_SESSION['login'] = $_POST['changelogin'];
            header("refresh:2; url=moncompte.php");
        }

        ?>

        <h2>Mot de passe</h2>
        <h4>Modifier votre mot de passe :</h4>
        <form method="post" action="moncompte.php">
            <table>
                <tr>
                    <td>Mot de passe actuel :</td>
                    <td><input name="oldmdp" type="password"></td>
                </tr>
                <tr>
                    <td>Nouveau mot de passe :</td>
                    <td><input name="newmdp" type="password"></td>
                </tr>
                <tr>
                    <td>Confirmation du nouveau mot de passe :</td>
                    <td><input name="newmdpconf" type="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input name="envoimdp" type="submit" value="OK"></td>
                </tr>
            </table>
        </form>

        <?php

        if (
            isset($_POST['envoimdp']) and
            isset($_POST['oldmdp']) and !empty($_POST['oldmdp']) and
            isset($_POST['newmdp']) and !empty($_POST['newmdp']) and
            isset($_POST['newmdpconf']) and !empty($_POST['newmdpconf']) and $_POST['newmdpconf'] == $_POST['newmdp']
        ) {
            $req = $bdd->query('select * from membre where id = ' . $_SESSION['id'])->fetch();
            if ($req) {
                if ($req['mdp'] == $_POST['oldmdp']) {
                    $bdd->exec('update membre set mdp = "' . $_POST['newmdp'] . '" where id = ' . $_SESSION['id']);
                    echo "Le mot de passe a bien été modifié.";
                } else {
                    echo "Le mot de passe actuel est incorrect.";
                }
            }
        } elseif (
            isset($_POST['envoimdp']) and
            isset($_POST['newmdpconf']) and !empty($_POST['newmdpconf']) and $_POST['newmdpconf'] != $_POST['newmdp']
        ) {
            echo "La confirmation du mot de passe ne correspond pas.";
        }

        ?>

    <?php } else { ?>

        <p>Vous n'êtes pas connecté(e). <a href="connection.php">Se connecter</a></p>

    <?php } ?>
</div>
































<?php include "inc/jooter.php" ?>