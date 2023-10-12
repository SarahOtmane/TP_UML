<?php
    class CompteBancaire{
        protected $name;
        protected $solde;

        function __construct( $name,  $solde){
            $this->name = $name;
            $this->solde = $solde;
        }

        function depot($somme){
            $this->solde += $somme;
        }

        function retrait($somme){
            $this->solde -= $somme;
        }

        function affiche(){
            echo('Le solde du compte bancaire de Mr/Mmme ' .$this->name. ' est de ' .$this->solde. ' euros.');
        }
    }
?>