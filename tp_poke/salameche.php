<?php
    include './pokemon.php';
    
    class Salam extends Pokemon
    {
        public function __construct ($level, $life = null)
        {
            $name = 'Salameche';
            $max_life = 82 + 5 * $level;
            $life = $life ?? $max_life;
            $type = 'feu';
            $strength = 52 + 2 * $level;

            parent::__construct($name, $max_life, $life, $level, $type, $strength);
        }
        public static function say_hi ()
        {
            echo "Sala sala !\n";
        }
    }
    
    $salameche = new Salam(1);
    //$pokemon->level_up();
    var_dump($salameche);

?>