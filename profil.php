<?php include "inc\header.php" ?>

<?php
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
?>

    <div class="">
        <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
        <h2>Voici tes informations : </h2>
        <h4>Username:
        <?php $result = $pdo->query("SELECT * FROM users WHERE username = '".$_SESSION['username']."'");
          while($users = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $users->username ;} ?> </h4>
        <h4>Mail:
        <?php $result = $pdo->query("SELECT * FROM users WHERE username = '".$_SESSION['username']."'");
          while($users = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $users->email ;} ?> </h4>
            <h4>Téléphone:
        <?php $result = $pdo->query("SELECT * FROM users WHERE username = '".$_SESSION['username']."'");
          while($users = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $users->tel ;} ?> </h4>
            <h4>Adresse:
        <?php $result = $pdo->query("SELECT * FROM users WHERE username = '".$_SESSION['username']."'");
          while($users = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $users->adresse ;} ?> </h4>
    </div>



    













<?php
} else {
?>
    <div class="">
        <h1>Vous n'êtes pas connecter</h1>
        <a href="login.php">Cliquer ici pour vous authentifier</a>
    </div>
<?php } ?>




<?php include "inc\jooter.php" ?>