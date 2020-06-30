public static function gnomeSort(array $array){
	$i = 1;
	while($i < count($array)){
		if($array[$i] >= $array[$i - 1]){
			$i++;
		}else{
			$tmp = $array[$i];
			$array[$i] = $array[$i - 1];
			$array[$i - 1] = $tmp;
			if($i > 1){
				$i--;
			}
		}
	}
		
	return $array;
}
