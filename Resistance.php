<?php 

	class Resistance
	{
		
		public $energyType;
		public $value;

		function __construct($energyType, $value){
			$this->energyType = $energyType;
			$this->decrease = $value;
		}
	}



 ?>