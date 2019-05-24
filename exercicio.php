<?php

$n = 7;
$arr = array(3, 1, 2, 2, 4);


#$valores = array(10,8,8,5,1,1,2,2,2,7,3);
$valores = array(7,7,7,7,5,5,5,0,3,4,7);

/*
asort($valores);
foreach( $valores as $chave => $valor ){
echo"<pre>";
echo "[$chave] = $valor\n";
echo "</pre>";
}
*/
$contagem = array_count_values($valores);
$naoRepetidos = [];
$repetidos = [];
$ordenacao=[];

foreach($contagem AS $numero => $vezes) {
    echo "$numero - $vezes<br />";
    array_push($ordenacao, $vezes);
    if($vezes <=1){
        array_push($naoRepetidos,$numero);
        asort($naoRepetidos);

    }else{
        
        for ($i = 1; $i <= $vezes; $i++){ 
            
            array_push($repetidos, $numero);
            asort($repetidos);
            
            
        }
    }
    
}
echo "ordenacao: ";
arsort($ordenacao);
var_dump($ordenacao);

$array_final = array();



print("Nao repetidos<br>");
print_r($naoRepetidos);
print("<br><br>Repetidos<br>");
print_r($repetidos);


foreach ($naoRepetidos as $chave=>$valor ){
    array_push($array_final, $valor);
}
foreach($repetidos as $chave =>$valor){
    array_push($array_final, $valor);
}

print("<br><br>Array final<br>");
print_r($array_final);