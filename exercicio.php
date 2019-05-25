<?php

$n = 7;
#$arr = array(3, 1, 2, 2, 4,3,3,3);


#$valores = array(10,8,8,5,1,1,2,2,2,7,3);
$valores = array(3, 1, 2, 2, 4);

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
echo "numero  |  vezes que repete<br>";
foreach($contagem AS $numero => $vezes) {
    array_push($ordenacao, $vezes);
    arsort($ordenacao);
    if($vezes <=1){
        array_push($naoRepetidos,$numero);
        asort($naoRepetidos);

    }else{
            # i=10     i>=10   i --
        for ($i = $vezes; $i >=1; $i--){ 
            echo "$numero ----------- $vezes<br />";
            array_push($repetidos, $numero);
            
            
            
        }
    }
    
    
}

$array_final = array();
foreach ($naoRepetidos  as $chave){
    echo "<br>NaoRepetidos ".$chave;
    array_push($array_final, $chave);
}

foreach ($repetidos As  $chave ){
    echo "<br>Repetidos ".$chave;
    array_push($array_final, $chave);
}
#array(8, 4, 4, 1, 1, 1, 5, 5, 5, 5)

    echo" Array Final [";
foreach($array_final as $chave){
     echo " $chave, ";
}
echo "  ]";
