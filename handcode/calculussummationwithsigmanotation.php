function sumfunction($start, $length){
 $sum = 0;
    for($i = $start; $i <= $length ; $i++){
       $sum += 1/(pow($i, 2)+9);
    }
 return $sum .' ';
}

//Sample run
echo sumfunction(2,6);

//Sample output
0.22411261940674
