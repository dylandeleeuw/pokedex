<?php 
	require_once 'Pikachu.php';
	require_once 'Charmeleon.php';

	$pikachu = new Pikachu('pika');
	print_r('<pre>' . $pikachu . '</pre>');

	$charmeleon = new Charmeleon('char');
	print_r('<pre>' . $charmeleon . '</pre>');

	echo $pikachu->attack($charmeleon, 1);
	echo $charmeleon->attack($pikachu, 0);

	echo $pikachu->name . ' has ' . $pikachu->hitpoints . ' health left <br>';
	echo $charmeleon->name . ' has ' . $charmeleon->hitpoints . ' health left';


 ?>