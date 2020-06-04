<?php include "inc\header.php" ?>

<?php session_start(); ?>


<div class="wrapper inscription">
		<h1>Connexion</h1>
		<form method="post" action="connection.php">
			<table>
				<tr>
					<td>Identifiant : </td>
					<td><input type="text" name="login"></td>
				</tr>
				<tr>
					<td>Mot de passe : </td>
					<td><input type="password" name="mdp"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="envoi" value="Se connecter"></td>
				</tr>
				<tr>
					<td>Pas de compte ?</td>
					<td><a href="inscription.php">S'inscrire</a></td>
				</tr>
			</table>
        </form>
		<?php 

		if (isset($_POST['envoi']) AND 
			isset($_POST['login']) AND !empty($_POST['login']) AND 
			isset($_POST['mdp']) AND !empty($_POST['mdp'])) {

			$req = $bdd->query('select * from membre where pseudo = "'.$_POST['login'].'" and mdp = "'.$_POST['mdp'].'"')->fetch();

			if ($req) {
				session_start();
				$_SESSION['id'] = $req['id'];
				$_SESSION['login'] = $req['pseudo'];
				$_SESSION['statut'] = $req['statut'];
				header("Location: index.php");
		?>

			<p>Connexion validée !<br><a href="index.php">Retour à l'accueil</a></p>

		<?php
			} else {
				echo "<p>Mauvais identifiant ou mot de passe.</p>";
			}
		} ?>
</div>
















<?php include "inc\jooter.php" ?>