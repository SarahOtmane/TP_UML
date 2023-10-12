<?php 
    class Impot extends Personne{
        const tauxImpot15 = 0.15;
        const tauxImpot20 = 0.20;
        
        function __construct() {
        }


        function CalculImpot($client) {
            if($client->revenu < 15000){
                $totalImpot = $client->revenu * self::tauxImpot15;
            } else{
                $rest = $client->revenu - 15000;
                $totalImpot = (15000 * self::tauxImpot15) + ($rest * self::tauxImpot20);
            }

            return $totalImpot;
        }

        public function AfficheImpot($client, $totalImpot) {
            echo('Mr/Mmme ' .$client->nom. ' votre impot est de ' .$totalImpot. ' euros');
        }
    }


?>
