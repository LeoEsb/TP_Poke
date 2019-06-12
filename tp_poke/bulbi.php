<?php
    include './pokemon.php';
    
    class Bulbi extends Pokemon
    {
        public function __construct ($level, $life = null)
        {
            $name = 'Bulbizarre';
            $max_life = 94 + 5 * $level;
            $life = $life ?? $max_life;
            $type = 'terre';
            $strength = 49 + 2 * $level;

            parent::__construct($name, $max_life, $life, $level, $type, $strength);
        }
        public static function say_hi ()
        {
            echo "Bulbi...zarrre !\n";
        }
    }
    
    $bulbizarre = new Bulbi(1);
    //$pokemon->level_up();
    var_dump($bulbizarre);

?>