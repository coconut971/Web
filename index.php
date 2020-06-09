

<?php include "inc\header.php" ?>

<p>Ceci est ma page d'accueil Lebonkoin, un site pour poster des annonces de bien à vendre et pour en acheter</p>
<div class="row">

        

                <div class="card">
                        <div class="card-body">
                                <h5 class="card-title">Ceci est mon titre</h5>
                                <p>Je vend mon bien dans le 10ème arrondissement de paris</p>
                                <a href="" class="btn btn-primary">Voir détails</a>
                                
                        </div>
                        
                        
                    
                </div>
                <div class="card">
                        <div class="card-body">
                                <h5 class="card-title">Ceci est mon titre</h5>
                                <p>Je vend mon bien dans le 10ème arrondissement de paris</p>
                                <a href="" class="btn btn-primary">Voir détails</a>
                                
                        </div>
                        
                        
                    
                </div>
                <div class="card">
                        <div class="card-body">
                                <h5 class="card-title">Ceci est mon titre2</h5>
                                <p>Je vend mon bien dans le 10ème arrondissement de paris</p>
                                <a href="" class="btn btn-primary">Voir détails</a>
                                
                        </div>
                        
                        
                    
                </div>
                <div class="card">
                        <div class="card-body">
                                <h5 class="card-title">Ceci est mon titre3</h5>
                                <p>Je vend mon bien dans le 10ème arrondissement de paris</p>
                                <a href="" class="btn btn-primary">Voir détails</a>
                                
                        </div>
                        
                        
                    
                </div>
                <div class="card">
                        <div class="card-body">
                                <h5 class="card-title">Ceci est mon titre4</h5>
                                <p>Je vend mon bien dans le 10ème arrondissement de paris</p>
                                <a href="" class="btn btn-primary">Voir détails</a>
                                
                        </div>
                        
                        
                    
                </div>


</div>






<?php 
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
    echo 'Bonjour ' . $_SESSION['pseudo'];
}
?>

<?php include "inc\jooter.php" ?>




