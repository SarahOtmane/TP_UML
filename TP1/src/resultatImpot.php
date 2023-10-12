<?php

    require('autoload.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nom"];
        $revenu = $_POST["revenu"];

        $client = new Personne($revenu, $nom);
        $impotClient = new Impot();
        $totalImpot = $impotClient->CalculImpot($client);
        $impotClient->AfficheImpot($client, $totalImpot);
    }
?>