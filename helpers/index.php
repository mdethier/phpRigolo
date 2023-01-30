<?php  include '../config.php'; ?>
<?php  include '../header.php'; ?>

<div class="general-content">
<h1>Les helpers</h1>
    <h2>Explications sur l'exercice</h2>
    <p>Faites une requête dans la base de données liées à ces exercices pour retourner la totalité des apprenants. Faites du PHP pour mélanger ce résultat et obtenir 4 apprenants au hasard.
    </p>
<h2>Résultat</h2>


    <!-- Début du code à remplacer par votre PHP 
   
    
    <div class="choix-aleatoire">OZMANOV Alik</div><div class="choix-aleatoire">DETHIER Maxime</div><div class="choix-aleatoire">BAALY Ike David</div><div class="choix-aleatoire">PENTEADO Anthony</div>-->
    
    <?php 
    $getApprenants = $dbconnexion->query('select * from users');
    $apprenants = $getApprenants->fetchAll();
    
    shuffle($apprenants);

    for ($i=0; $i<4; $i++) {
        echo "<div class=\"choix-aleatoire\">".$apprenants[$i]["nom"]." ".$apprenants[$i]["prenom"]."</div>";

    }
 
    ?>
    <!-- Fin du code à remplacer par votre PHP -->

<script>
$(document).ready(function() {
	$('.menu-link').menuFullpage();
} );
</script>
<?php  include '../footer.php'; ?>