<?php
// PDO Datenbankverbindung aufbauen (modernste Schnittstelle zur MYSQL-Datenbank). UTF8 Codierung benutzen. Auf Live Server PW für DB vergeben.
$pdo = new PDO('mysql:host=localhost; dbname=test;charset=utf8', 'root', '');
// DB PDO Einstellung für korrekte Zeichencodierung
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

// Funktion zum Laden aller Rezepte
function fetch_recipes()
{
    // Variablen in der Funktion müssen global definiert werden, damit man von außerhalb darauf zu greifen kann
    global $pdo;
    return $pdo->query("SELECT * FROM dbrezepte");
}

// Funktion zum Laden einer Rezept URL über die Spalte "dbrezepturl"
function fetch_recipe($rezepturl)
{
    // $rezepturl wird als Parameter der Funktion übergeben. Diese setzt man dann als Titel für die URL und lässt sich über die Funktion "fetch" alle weiteren Spalten in dem Rezept Array anzeigen
    // Zugriff auf Variable pdo durch global
    global $pdo;
    // Prepare Statement benutzen mit einem beliebigen Parameter um SQL Injections vorzubeugen.
    $stmt = $pdo->prepare("SELECT * FROM dbrezepte WHERE dbrezepturl = :rezepturl ");
    // Der beliebige Parameter 'rezepturl' hat den Wert $rezepturl in dem übergebenen Array. Bei mehreren Werten wird mit Komma getrennt.
    $stmt->execute(['rezepturl' => $rezepturl]);
    return $stmt->fetch();

    // SO NICHT!
    // $query = $pdo->query("SELECT * FROM dbrezepte WHERE dbrezepturl='{$rezepturl}'");
    // $q = $pdo->query($query);
}
