<?php  include '../config.php'; ?>
<?php  include '../header.php'; ?>

<div class="general-content">
<h1>La note</h1>
    <h2>Explications sur l'exercice</h2>
    <p>Calculez vous même votre note en utilisant le formulaire suivant. Attention, les notes sont dans le fichier note.txt au format JSON, vous devez faire la correspondance entre ces données et les données envoyées par le formulaire.
    </p>

<!-- Début de votre PHP
<div-- class="MegaNote">20/20</div-->
<?php
$contenuFichier = file_get_contents("note.txt");
$bareme = json_decode($contenuFichier);

if (isset($_POST["helpers"])) {

 /* var_dump($bareme->{$_POST["helpers"]});
  var_dump($bareme->{$_POST["classe"]});
  var_dump($bareme->{$_POST["note"]});
  var_dump($bareme->{$_POST["menu"]});
  var_dump($bareme->{$_POST["referencement"]});
  var_dump ($bareme->{$_POST["vignettes"]});
  var_dump ($bareme->{$_POST["morpion"]});
  var_dump ($bareme->{$_POST["news"]});
  var_dump ($bareme->{$_POST["csv"]}); */
  
 $total = $bareme->{$_POST["helpers"]} + $bareme->{$_POST["classe"]} + $bareme->{$_POST["note"]} + $bareme->{$_POST["menu"]} + $bareme->{$_POST["referencement"]} + $bareme->{$_POST["vignettes"]} + $bareme->{$_POST["morpion"]} + $bareme->{$_POST["news"]} + $bareme->{$_POST["csv"]};


  echo '<div class="MegaNote">'.$total.'/20</div>';
}

?>


<!-- Fin de votre PHP-->
    
<h2>Avez-vous réussi les exercices suivants :</h2>
<form action="/note/" method="post" id="exo">
  <table class="table table-striped">
  <tbody>
    <tr>
      <td class="lead">Exercice "Les helpers"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="helpers" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="helpers" value="lhGtF62">OUI
    </label></td>
    </tr>
    <tr>
      <td class="lead">Exercice "La classe"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="classe" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="classe" value="lhGtF62">OUI
    </label></td>
    </tr>
     <tr>
      <td class="lead">Exercice "La note"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="note" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="note" value="lhGtF62">OUI
    </label></td>
    </tr>
      <tr>
      <td class="lead">Exercice "Le menu"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="menu" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="menu" value="GFoP5s">OUI
    </label></td>
    </tr>
       <tr>
      <td class="lead">Exercice "Référencement"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="referencement" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="referencement" value="GFoP5s">OUI
    </label></td>
    </tr>
       <tr>
      <td class="lead">Exercice "Vignettes"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="vignettes" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="vignettes" value="GFoP5s">OUI
    </label></td>
    </tr>
       <tr>
      <td class="lead">Exercice "Morpion"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="morpion" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="morpion" value="MvDF34">OUI
    </label></td>
    </tr>
       <tr>
      <td class="lead">News"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="news" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="news" value="MvDF34">OUI
    </label></td>
    </tr>
        <tr>
      <td class="lead">Exercice "Fichier CSV"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="csv" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="csv" value="YvKJhc23">OUI
    </label></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><button type="submit" class="btn btn-default btn-lg" form="exo" value="Submit">Calculer ma note</button></td>
    </tr>
  </tbody>
</table>


</form>

<script>
$(document).ready(function() {
	$('.menu-link').menuFullpage();
} );
</script>
<?php  include '../footer.php'; ?>