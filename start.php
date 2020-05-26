<?php

// Checken, ob die PDO-Erweiterung auf dem Server aktiv ist
// phpinfo();

function autoload($className)
{
    if (file_exists("./src/{$className}.php")) {
        require "./src/{$className}.php";
    }
}

spl_autoload_register("autoload");

// PDO Datenbankverbindung aufbauen (modernste Schnittstelle zur MYSQL-Datenbank). Auf Live Server PW für DB vergeben.
$pdo = new PDO('mysql:host=localhost; dbname=test', 'root', '');

// Query an die DB und Ausgabe mit foreach Schleife
$res = $pdo->query("SELECT * FROM dbrezepte");
foreach ($res as $row) {
    var_dump($row);
}
