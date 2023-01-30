<?php  include '../config.php'; ?>
<?php  include '../header.php'; ?>
<div class="general-content">
<h1>La classe</h1>
    <h2>Explications sur l'exercice</h2>
    <p>Faites une requête dans la base de données users, vous devez remonter les informations, nom, prenom et date_naissance. La date de naissance doit être transformée pour donner l'âge de la personne. Vous devez faire une fonction pour la convertion date de naissance / âge.
    </p>
<h2>Résultat</h2>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>

            </tr>
        </tfoot>
        <tbody>

        <!-- Début du code à remplacer par votre PHP 
        <tr><td>Ike David</td><td>Baaly</td><td>36 ans</td></tr><tr><td>Maxime</td><td>Dethier</td><td>50 ans</td></tr><tr><td>Jonathan</td><td>Domergue</td><td>38 ans</td></tr><tr><td>Alik</td><td>Ozmanov</td><td>28 ans</td></tr><tr><td>Anthony</td><td>Penteado</td><td>43 ans</td></tr><tr><td>Wilfrid</td><td>Petit</td><td>48 ans</td></tr>-->

        <?php

        $getApprenants = $dbconnexion->query('select nom,prenom,date_naissance from users');
        $apprenants = $getApprenants->fetchAll();

        // var_dump($apprenants);
        foreach($apprenants as $apprenant){

            echo '<tr><td>'.$apprenant["nom"].'</td><td>'.$apprenant["prenom"].'</td><td>'.calculateAge($apprenant["date_naissance"]).'</td></tr>';
        };
        
        function calculateAge($birthdate) {
            $birthdate = new DateTime($birthdate);
            $now = new DateTime();
            $age = $now->diff($birthdate);
            return $age->y;
        }
        

        ?>
        <!-- Fin du code à remplacer par votre PHP -->

        </tbody>
    </table>
    </div>
<script>
$(document).ready(function() {
	$('.menu-link').menuFullpage();
    $('#example').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/French.json"
            }
        } );
} );
</script>
<?php  include '../footer.php'; ?>