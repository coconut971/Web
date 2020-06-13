<?php include "inc\header.php" ?>

<?php
//Insertion dans la base de donnée de la modification de l'adresse  
$pdo = new PDO("mysql:host=localhost;dbname=registration", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$result = $pdo->exec("UPDATE users SET adresse = '$_POST[adresse]' WHERE username = '" . $_SESSION['username'] . "'  ");

?>

<h3>Vos informations ont été mis à jours</h3>
<a href="profil.php">Cliquer ici pour retourner à votre profil</a>



<?php include "inc\jooter.php" ?>
