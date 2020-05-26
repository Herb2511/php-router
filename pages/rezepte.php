<?php include("elements/head.php"); ?>
<?php include("elements/header.php"); ?>

<h1>Übersicht der Rezepte</h1>
<p class="lead">Das hier ist die Übersicht der Rezepte.</p>
<?php
// Aufruf der Query Funktion für die DB Abfrage
$res = fetch_recipes();
?>
<!-- Über Pre Formated Tag kann man das Ergebnis sauber mit Leerzeichen ausgeben. -->
<ul>
    <!-- Übersichtliche Schreibweise in Foreach Schleife nutzen um alle Zeilen auszugeben -->
    <?php foreach ($res as $row) : ?>
        <li>
            <?php echo $row["dbrezeptbezeichnung"]; ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php include("elements/footer.php"); ?>