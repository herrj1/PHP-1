<?php
	function printFibonacciIte($n){
		$first = 0;
		$second = 1;
		echo "Fibonacci series \n";
		echo $first .' '. $second .' ';
		
		for($i = 2; $i < $n; $i++){
			$third = $first + $second;
			echo $third .' ';
			$first = $second;
			$second = $third;
		}
	}

?>
