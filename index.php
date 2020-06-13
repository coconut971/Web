<?php 

$pdo = new PDO("mysql:host=localhost;dbname=registration", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

?>
<?php include "inc\header.php" ?>

<p>Ceci est ma page d'accueil Lebonkoin, un site pour poster des annonces de bien à vendre et pour en acheter</p>
<div class="row" id="annonce">

        <?php $result = $pdo->query("SELECT * FROM annonce");
                    while($annonce = $result->fetch(PDO::FETCH_OBJ)) { ?>

                <div class="card">
                        <div class="card-body">
                                
                                <h5 class="card-title"><?php echo $annonce->titre ;?></h5>
                                <p><?php echo $annonce->descriptions ;?></p>
                                <p><?php echo $annonce->prix ;?></p>
                                <a href="" class="btn btn-primary">Voir détails</a>
                                 
                        </div>
                        
                        
                    
                </div>
                    <?php } ?>
</div>






<?php 
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
    echo 'Bonjour ' . $_SESSION['pseudo'];
}
?>

<?php include "inc\jooter.php" ?>




