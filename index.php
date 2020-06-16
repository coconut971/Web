<?php 

$pdo = new PDO("mysql:host=localhost;dbname=registration", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

?>
<?php include "inc\header.php" ?>

<h1>Bienvenue sur Lebonkoinkoin, un site pour acheter des canards en plastique. Voici les canards en vente en ce moment !</h1>
<div class="row" id="annonce">

        <?php $result = $pdo->query("SELECT * FROM annonce");
                    while($annonce = $result->fetch(PDO::FETCH_OBJ)) { ?>

                <div class="card">
                        <div class="card-body">

        
                                
                        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo $annonce->url_img1 ?>" alt="Photo-canard">                                          
                                <h5 class="card-title"><?php echo $annonce->titre ;?></h5>
                                <p><?php echo substr($annonce->descriptions, 0, 100) . "...";?></p> 
                                
                                <p><?php echo ($annonce->prix ) . "€" ;?></p>
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




