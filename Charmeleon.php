<?php

	require_once 'pokemon.php';
	require_once 'attack.php';
	require_once 'EnergyType.php';
	require_once 'Weakness.php';
	require_once 'Resistance.php';

	
	class Charmeleon extends Pokemon
	{
		
		public $hitpoints = 60;
		public $health = 60;

		function __construct($name)
		{
			$energyType = new EnergyType('fire');
			$weakness = new Weakness('Water', 2);
			$resistance = new Resistance('Water', 2);
			$attacks = array (
						new Attack('Head Butt', 10),
						new Attack('Flare', 30)
					);
			parent::__construct($name, $energyType, $this->hitpoints, $this->health, $attacks, $weakness, $resistance);
		}
	}