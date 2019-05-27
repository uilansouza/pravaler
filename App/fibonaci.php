<?php 

 
function fibonacci($q, $zero = false){
	$q = 10;
	if($q >= 2){ 
		$f = ($zero) ? [0,1] : [1,1]; 
		for($i = 2; $i < $q; $i++){
			$f[$i] = $f[$i-1] + $f[$i-2];		
		}
		return $f;
	}
	return ($q == 1) ? [1] : [];
}
 

$fib = fibonacci(10, true);
$sequencia=[];
foreach($fib as $v){
	echo (end($fib) == $v) ? $v : $v.', ';
	array_push($sequencia, $v)	;
}

return $sequencia;
?>