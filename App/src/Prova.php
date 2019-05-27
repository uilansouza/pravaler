<?php

namespace App;

class Prova
{

    public function QuestaoUm(int $n, array $arr)
    {
        $quantidade = $n;
        $valores = $arr;// array(3, 1, 2, 2, 4);
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

            
        return $array_final;


    }

    public function QuestaoDois(int $n)
    {/*
        function fibonacci($q, $zero = false){
            if($q >= 2){ 
                $f = ($zero) ? [0,1] : [1,1]; 
                for($i = 2; $i < $q; $i++){
                    $f[$i] = $f[$i-1] + $f[$i-2];		
                }
                return $f;
            }
            return ($q == 1) ? [1] : [];
        }
         
        
        $fib = fibonacci($n, true);
        $sequencia=[];
        foreach($fib as $v){
            echo (end($fib) == $v) ? $v : $v.', ';
            array_push($sequencia, $v)	;
        }
        
        echo "<br>";
        return $sequencia;
        */
    }

    public function QuestaoTres(string $s)
    {
        $procurar =['a','e','i','o','u'];
        $vogais = $s;
        $cont = 0;
        $i=0;
        $posicao =0;
        $a= strlen($vogais);
        for ($i=0; $i<count($procurar); $i++){    
            for($j=$posicao; $j <strlen($vogais); $j++){ 
                
                if($procurar[$i] == $vogais[$j]){ 
                    $cont++;                 
                    $posicao = $j;
                    continue;
                }
                $pos = strpos($vogais, $procurar[$i]);
                if($pos=== false){
                    $cont = 0;
                    return 0;
                }

                if($i+1 <count($procurar)){
                                                        
                    if( $procurar[$i+1] == $vogais[$j]  ){
                        break;
                    }
                }
            }
        }
        return $cont;

    }

    public function QuestaoQuatro(int $n, array $a, array $b, array $v)
    {
        
    }
}
