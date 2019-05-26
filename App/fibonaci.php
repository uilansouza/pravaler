<?php 

 
function fibonacci($a, $zero = false){
	if($a >= 2){ 
		$n = ($zero) ? [0,1] : [1,1]; 
		for($i = 2; $i < $a; $i++){
			$n[$i] = $n[$i-1] + $n[$i-2];		
		}
		return $n;
	}
	return ($a == 1) ? [1] : [];
}
 
//exibindo os primeiros n números da seuqneica  de fibonacci,  iniciando por  0
$seq = fibonacci(10, true);
//var_dump($seq);
$arr = array();
$arr = $seq;
return $arr;
foreach($seq as $u){
	//echo (end($seq) == $u) ? $u : $u.', ';	
}


?>