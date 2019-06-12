<?php
    include './pokemon.php';
    
    class Cara extends Pokemon
    {
        public function __construct ($level, $life = null)
        {
            $name = 'Carapuce';
            $max_life = 109 + 5 * $level;
            $life = $life ?? $max_life;
            $type = 'eau';
            $strength = 48 + 2 * $level;

            parent::__construct($name, $max_life, $life, $level, $type, $strength);
        }
        public static function say_hi ()
        {
            echo "Carapuce !\n";
        }
    }
    
    $carapuce = new Cara(1);
    //$pokemon->level_up();
    var_dump($carapuce);

?>