<?php include("elements/head.php"); ?>
<?php include("elements/header.php"); ?>

<h1>Startseite der Rezepte</h1>
<p class="lead">Das hier ist die Startseite der Rezepte.</p>

<?php
//Setzen der Variablen $result und Aufruf der Query Funktion für die DB Abfrage
$result = fetch_recipes();
?>
<!-- Über Pre Formated Tag kann man das Ergebnis sauber mit Leerzeichen ausgeben. -->
<ul>
    <!-- Übersichtliche Schreibweise in Foreach Schleife nutzen um alle Zeilen auszugeben -->
    <?php foreach ($result as $row) : ?>
        <li>
            <!-- rezept.php Template bekommt Parameter übergeben, welcher Titel das Rezept haben soll. Sollte in Zukunft von der Spalte "dbrezepturl" kommen -->
            <a href="rezept.php?dbrezepturl=<?php echo $row["dbrezepturl"]; ?>">
                <?php echo $row["dbrezeptbezeichnung"]; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php include("elements/footer.php"); ?>