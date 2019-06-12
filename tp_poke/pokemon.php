<?php
abstract class Pokemon 
{
    public $name;
    public $maxlife;
	public $life;
	public $level;
	public $type;
	public $strength;
	public function __construct ($name, $maxlife, $life, $level, $type, $strength)
	{
		$this->name = $name;
		$this->maxlife = $maxlife;	
		$this->life = $life;
		$this->level = $level;
		$this->type = $type;
		$this->strength = $strength;
		
		static::say_hi();
	}
	
	public static function say_hi ()
	{
		echo "Hi !\n";
    }
}
 ?>