<?php
    spl_autoload_register(function ($Personne) {
        include 'class/' .$Personne . '.php';
    }); 

    spl_autoload_register(function ($impot) {
        include 'class/' .$impot . '.php';
    }); 
?>