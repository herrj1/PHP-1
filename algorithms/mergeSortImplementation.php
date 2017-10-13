class mergeSort{
	
	@param type $array
	@return array Sorted input array
	public function sort($array){
		
		$count = count($array);
		if($count<=1){
			return $array;
		}
		
		$mid = (int)$count/2;
		$left=array();
		$right=array();
		for($i=0; $i<$mid; i++){
			$left[]=$array[$i];
		}
		
		for($i=$mid; $imerge($this->sort($left), $this->sort($right)));
	}
	
	private function merge($left, $right){
		
		$sorted=array();
		
		while(count($left)>0 && count($right)>0){
			
			if($left[0]<$right[0]){
				$sorted[]=$left[0];
				array_shift($left);
			}else{
				$sorted[]=$right[0];
				array_shift($right);
			}
		}
		
		for($i=0; $i<count($left); $i++){
			$sorted[]=$left[$i];
		}
		for($i=0;$i<count($right);i++){
			$sorted[]=$right[$i];
		}
		return $sorted;
	}
}