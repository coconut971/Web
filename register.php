<?php include "inc\header.php" ?>


<?php

if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['mdp'], $_REQUEST['tel'], $_REQUEST['adresse'])){
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username); 
	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$mdp = stripslashes($_REQUEST['mdp']);
    $mdp = mysqli_real_escape_string($conn, $mdp);
    // récupérer le téléphone et supprimer les antislashes ajoutés par le formulaire
	$tel = stripslashes($_REQUEST['tel']);
    $tel = mysqli_real_escape_string($conn, $tel);
    // récupérer l'adresse et supprimer les antislashes ajoutés par le formulaire
	$adresse = stripslashes($_REQUEST['adresse']);
    $adresse = mysqli_real_escape_string($conn, $adresse);
	//requéte SQL + mot de passe crypté
    $query = "INSERT into `users` (username, email, mdp, tel, adresse)
              VALUES ('$username', '$email', '".hash('sha256', $mdp)."', '$tel', '$adresse')";
	// Exécute la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
			 </div>";
    }
}else{
?>
<form class="box" action="" method="post">
	
    <h1 class="box-title">S'inscrire</h1>
	<li><input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required /> </li>
    <li><input type="text" class="box-input" name="email" placeholder="Email" required /> </li>
    <li><input type="password" class="box-input" name="mdp" placeholder="Mot de passe" required /> </li>
    <li><input type="text" class="box-input" name="tel" placeholder="Téléphone" required /> </li>
    <li><input type="adresse" class="box-input" name="adresse" placeholder="38 rue de fontenay 94300 Vincennes " required /> </li>


    
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />






    <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
</form>
<?php } ?>


<?php include "inc\jooter.php" ?>