<?php include("elements/head.php"); ?>
<?php include("elements/header.php"); ?>

<h1>Rezeptseite</h1>
<p class="lead">Das hier ist eine Einzelseite eines Rezepts</p>

<?php
// URL und weitere Daten eines Rezepts werden über die globale Variable $_GET als assoziatives Array geholt und über die Funkton fetch_recipe gesetzt
$rezepturl = $_GET["dbrezepturl"];
$rezept = fetch_recipe($rezepturl);
// Zeigt alle Daten eines Rezepts an, das wir betrachten möchten
// var_dump($rezept);
// echo "<pre>";
// print_r($rezept);
// echo "</pre>";
?>

<!-- Ausgabe des Rezeptnamens und aller weiteren Daten -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $rezept["dbrezeptbezeichnung"]; ?></h3>
    </div>
    <div class="panel-body">
        <?php echo $rezept["dbrezeptbeschreibung"]; ?>
    </div>
    <div class="panel-body">
        <?php echo $rezept["dbrezeptkategorie"]; ?>
    </div>
    <div class="panel-body">
        <?php echo $rezept["dbrezeptschwierigkeit"]; ?>
    </div>
    <div class="panel-body">
        <?php echo $rezept["dbrezeptdauer"]; ?>
    </div>
    <div class="panel-body">
        <?php echo $rezept["dbrezeptkueche"]; ?>
    </div>
</div>

<?php include("elements/footer.php"); ?>