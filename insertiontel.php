<?php include "inc\header.php" ?>

<?php

$pdo = new PDO("mysql:host=localhost;dbname=registration", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$result = $pdo->exec("UPDATE users SET tel = '$_POST[tel]' WHERE username = '" . $_SESSION['username'] . "'  ");

?>

<h3>Vos informations ont été mis à jours</h3>
<a href="profil.php">Cliquer ici pour retourner à votre profil</a>



<?php include "inc\jooter.php" ?>