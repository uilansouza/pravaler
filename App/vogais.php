<?php

function vogal(){
    
    $procurar =['a','e','i','o','u'];
    $vogais = "uioieeeaouiiuaeeuuiuuauuauaeaeuauaeaaiuoiouaeuiuuoooaeeaioeieoeooaeuooae";
    $cont = 0;
    $i=0;
    $posicao =0;
    $a= strlen($vogais);
    for ($i=0; $i<count($procurar); $i++){    
        for($j=$posicao; $j <strlen($vogais); $j++){   //    PROCURAR    VOGAL
             // echo "<br> I[$i]  J[$j] <br>"; //   
                                             //    
            echo "J - $j";
            echo "$procurar[$i] - $vogais[$j] <br>";       //      a           a        
            if($procurar[$i] == $vogais[$j]){ 
                $cont++;                 //2
                $posicao = $j;
                echo "<br>cont $cont<br>";
                echo "$procurar[$i] - $vogais[$j] <br>";
                
                continue;
            }
            $pos = strpos($vogais, $procurar[$i]);
            if($pos=== false){

                $cont = 0;
                return 0;
            }

            if($i+1 <count($procurar)){
                                                    // PROCURAR      VOGAL
                if( $procurar[$i+1] == $vogais[$j]  ){//   e            u
                    break;
                }
            }
        }
    }
    return $cont;
}


$retorno = vogal();
echo "Retonor: ".$retorno;