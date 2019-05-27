<?php

$n = 7;
 $teste = [8, 5, 5, 5, 5, 1, 1, 1, 4, 4];
$valores = $teste; //array(1, 2, 3, 7, 1, 8, 2);

echo "Array Inicial [";
foreach ($valores as $chave){
    echo " $chave, ";
}
echo "  ]<br><br>";

$contagem = array_count_values($valores);
$naoRepetidos = [];
$repetidos = [];

$numeroRepeticao = [];
foreach($contagem AS $numero => $vezes) {
    array_push($numeroRepeticao, $vezes);       
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


$cont=0;
for  ($i=0; $i<=count($numeroRepeticao); $i++){
      if($numeroRepeticao[$i]==$numeroRepeticao[$i+1] and $numeroRepeticao[0]>1){
          $cont++;
      }
}
   
if( $cont <=1){
    for ($i = count($repetidos)-1; $i>=0; $i--){
        array_push($array_final, $repetidos[$i]);
                    
    }
}else{
    foreach ($repetidos as  $chave ){
        array_push($array_final, $chave);
    }
}


echo" Array Final [";
foreach($array_final as $chave){
     echo " $chave ";
}
echo "  ]";
echo "<br>";
echo "<pre>";
