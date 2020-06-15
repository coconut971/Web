<?php include "inc\header.php" ?>


<?php


if (isset($_GET["s"]) AND $_GET["s"] == "Rechercher")
{
 $_GET["terme"] = htmlspecialchars($_GET["terme"]); //pour sécuriser le formulaire contre les intrusions html
 $terme = $_GET["terme"];
 $terme = trim($terme); //pour supprimer les espaces dans la requête de l'internaute
 $terme = strip_tags($terme); //pour supprimer les balises html dans la requête

 if (isset($terme))
 {
  $terme = strtolower($terme);
  $select_terme = $bdd->prepare("SELECT titre, descriptions FROM annonce WHERE titre LIKE ? OR descriptions LIKE ?");
  $select_terme->execute(array("%".$terme."%", "%".$terme."%"));
 }
 else
 {
  $message = "Vous devez entrer votre requete dans la barre de recherche";
 }
}
?>

<?php
  while($terme_trouve = $select_terme->fetch())
  {
   echo "<div class='row' id='annonce'>       <div class='card'><div class='card-body'><h5 class='card-title'>".$terme_trouve['titre']."</h5><p> ".substr($terme_trouve['descriptions'],0, 100). "..."."</p> <a href='' class='btn btn-primary'>Voir détails</a> </div> </div> </div>";
  


}
  

  $select_terme->closeCursor();
   ?>



                                
                                
<?php include "inc\jooter.php" ?>