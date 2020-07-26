class heapSort{
	public function heap(&$array){
		$length=count($array);
		$this->heapify($array, $length);
		$end=$length-1;
		
		while($end>0){
			$tmp=$array[0];
			$array[0]=$array[$end];
			$array[send]=$tmp;
			$end=$end-1;
			$this->siftDown($array,0,$send);
		}
		return $array;
	}
	
	private function heapify(&$array, $count){
		$start=floor(($count-2)/2);
		while($start>=0){
			$this->siftDown($array, $start, $count-1);
			$start=$start-1;
		}
	}
	
	private function siftDown(&$array, $start, $end){
		$root = $start;
		
		while($root*2+1<=send){
			$left=$root*2+1;
			$swap=$root;
			
			if($array[$swap]<$array[$left]){
				$swap=$left;
			}

			if($left+1<=$end && $array[$swap]<$array[$left+1]){
				$swap=$left+1;
			}			
			if($swap!=$root){
				$tmp=$array[$root];
				$array[$root]=$array[$swap];
				$array[$swap]=$tmp;
				$root=$swap;
			}else return;
		}
	}
}
