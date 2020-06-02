<?php include "inc\header.php" ?>

<div class="connection">
    <p>Veuillez entrer votre identifiant ainsi que votre mot de passe pour pouvoir continuer. </p>
    <form action="admin.php" method="post">

       <p>
            <input type="mail" name="mail" />
            <?php "<br>" ?>
            <input type="password" name="mot_de_passe" />


             <input type="submit" value="Valider" />

       </p>

    </form>


</div>
















<?php include "inc\jooter.php" ?>