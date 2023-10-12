<?php 
    require('./class/CompteBancaire.php');

    $name = 'Dupont';
    $solde = 1000;

    $compte1 = new CompteBancaire('Duchmol', 800);
    $compte1->depot(350);
    $compte1->retrait(200);
    $compte1->affiche();

    $compte1 = new CompteBancaire($name, $solde);
    $compte1->depot(25);
    $compte1->affiche();
?>