<?php 
	require_once 'pokemon.php';
	require_once 'attack.php';
	require_once 'EnergyType.php';
	require_once 'Weakness.php';
	require_once 'Resistance.php';

	
	class Pikachu extends Pokemon
	{
		
		public $hitpoints = 60;
		public $health = 60;

		function __construct($name)
		{
			$energyType = new EnergyType('Lightning');
			$weakness = new Weakness('Fire', 1.5);
			$resistance = new Resistance('Fighting', 20);
			$attacks = array (
						new Attack('Electric Ring', 50),
						new Attack('Pika Punch', 30)
					);
			parent::__construct($name, $energyType, $this->hitpoints, $this->health, $attacks, $weakness, $resistance);
		}
	}
 ?>