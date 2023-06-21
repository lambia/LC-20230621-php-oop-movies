<?php 

class Genre {
	public $name;
	public $icon;
	public $description;

	public function __construct($name)
	{
		$this->name = $name;
	}
}

?>