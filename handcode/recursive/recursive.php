<?php
	function printFibonacciRec($num){
		if($num==0){
			
		}else if($num == 1){
			
		}else{
			//Recursive call
			return(printFibonacciRec($num-1) + printFibonacciRec($num-2));
		}
	}
	
	echo 'The fibonacci is '.printFibonacciRec(5);

?>