<?php 
	require_once 'pikachu.php';
	require_once 'charmeleon.php';
	require_once 'attack.php';
	require_once 'EnergyType.php';
	require_once 'Weakness.php';
	require_once 'Resistance.php';
	require_once 'index.php';

	class Pokemon
	{
		
		public $name;
		public $energyType;
		public $hitpoints;
		public $health;
		public $attacks;
		public $weakness;
		public $resistance;

		public function __construct($name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance){
			$this->name = $name;
			$this->energyType = $energyType;
			$this->hitpoints = $hitpoints;
			$this->health = $health;
			$this->attacks = $attacks;
			$this->weakness = $weakness;
			$this->resistance = $resistance;
		}

		public function __toString() {
        	return json_encode($this);
    	}

    	public function attack($enemy, $attack){


    		return $enemy->defend($this->name, $this->attacks[$attack]->damage, $this->attacks[$attack]->name, $this->energyType);

    		
    	}

    	public function defend($name, $attackDamage, $attackName, $energyType){
    		if ($energyType == $this->weakness->energyType) {
    			$damage = $attackDamage * $this->weakness->multiplier;
    		}elseif ($energyType == $this->resistance->energyType) {
    			$damage = $attackDamage - $this->resistance->value;
    		}else{
    			$damage = $attackDamage;
    		}

    		$this->hitpoints = $this->hitpoints - $damage;

    		return $name . ' attacked ' . $this->name . ' with ' . $attackName . ' doing ' . $damage . ' damage <br>';
    	}

	}