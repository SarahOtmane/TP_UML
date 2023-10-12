<?php
    class Personne{
        protected $revenu;
        protected $nom;

        function __construct($revenu, $nom) {
            $this->revenu = $revenu;
            $this->nom = $nom;
        }
    }
?>