public static function combSort(array $array){
	$swapped = false;
	$j = 0; 
	$length = count($array);
	$gap = $length;
	
	while($gap > 1 || $swapped){
		if($gap > 1){
			$gap = floor($gap/1.2473);
		}
		
		$swapped = false;
		$j++;
		
		for($i=0; $i+$gap < $length; i++){
			if($array[$i] > $array[$i + $gap]){
				$tmp = $array[$i];
				$array[$i] = $array[$i + $gap];
				$array[$i + $gap] = $tmp;
				$swapped = true;
			}
		}
	}
	return $array;
}
