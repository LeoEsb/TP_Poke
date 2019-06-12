<?php
abstract class Ball {
	public $name;
	public $level;
	public function __construct ($name, $level)
	{
		$this->name = $name;
		$this->level = $level;
	}
	public function attraper ($target)
	{
		if ($this->level <= 50) { $capture_luck = 1;}
		else {
		$capture = round((($pokemon->max_life - $pokemon->life) / $pokemon->max_life) * (1 + ($ball->level - $pokemon->level)  / 25),2);
		}
		return $capture;
	}
}
?>