<?php include "inc\header.php" ?>

<?php

$pdo = new PDO("mysql:host=localhost;dbname=registration", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$result = $pdo->exec("UPDATE users SET username = '$_POST[username]' WHERE username = '" . $_SESSION['username'] . "'  ");






?>


<a href="logout.php">Cliquer ici pour vous reconnecter</a>



<?php include "inc\jooter.php" ?>

