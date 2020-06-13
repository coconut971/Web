<?php include "inc\header.php" ?>

<?php
//Insertion dans la base de donnée de la modification de l'username 
$pdo = new PDO("mysql:host=localhost;dbname=registration", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$result = $pdo->exec("UPDATE users SET username = '$_POST[username]' WHERE username = '" . $_SESSION['username'] . "'  ");

?>

<h3>Vos informations ont été mis à jours</h3>
<a href="logout.php">Cliquer ici pour vous reconnecter</a>



<?php include "inc\jooter.php" ?>

