<?php

$n = 7;

$valores = array(3, 1, 2, 2, 4);

echo "Array Inicial [";
foreach ($valores as $chave){
    echo " $chave, ";
}
echo "  ]<br><br>";

$contagem = array_count_values($valores);
$naoRepetidos = [];
$repetidos = [];
$ordenacao=[];
foreach($contagem AS $numero => $vezes) {
    array_push($ordenacao, $vezes);
    arsort($ordenacao);
    if($vezes <=1){
        array_push($naoRepetidos,$numero);
        asort($naoRepetidos);

    }else{
              
        for ($i = $vezes; $i >=1; $i--){ 
           array_push($repetidos, $numero);
        }
    }
    
    
}

$array_final = array();
foreach ($naoRepetidos  as $chave){
    array_push($array_final, $chave);
}

foreach ($repetidos As  $chave ){
    array_push($array_final, $chave);
}


echo" Array Final [";
foreach($array_final as $chave){
     echo " $chave, ";
}
echo "  ]";
