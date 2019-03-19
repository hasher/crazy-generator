<?php 

/**
 * @author     Judicael AHYI
 * @link       https://github.com/hasher/
 */

function _crazyGenerator($suffix, $long, $separator) {

	# init
	$max = $output = '';

	# calcul de la valeur max ( qui est dynamique )
	for ($i=0; $i < $long ; $i++) { 
		$max .= '9';
	}

	# processing . . .
	$long = "%0" . $long . "d";
	for ($i=0; $i < $max+1 ; $i++) { 
		$filled = sprintf($long, $i);
		$output .= $suffix . $filled . $separator;
	}

	return $output;

}




# Let having fun and try 
echo _crazyGenerator('AB', '2', '<br>');
echo "<hr>";
echo _crazyGenerator('XY', '2', '; ');
