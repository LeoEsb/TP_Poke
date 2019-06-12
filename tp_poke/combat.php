<?php

class Combat
    {
        public $name;
        public $strength;
        public $degat;

        public function __construct ($name, $strength,$degat)
    	{
    		$this->name = $name;
            $this->strength = $strength;
            $this->degat = $degat;
                       
        }
        
        public function fight ()
        {
            $this->strength = 10;
            $this->degat = $strength * (rand(900, 1100) / 1000);

            $combat = $this->name . ' inflige ' . $this->degat . "\n à un pokemon.\n";

            echo $combat;
            return true;
        }
    }
    $combat = new Combat('Zbeubi',10,'');
    $combat->fight();
    ?>