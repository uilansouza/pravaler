<?php

namespace App;

class Prova
{

    public function QuestaoUm(int $n, array $arr)
    {
        $quantidade = $n;
        $valores = $arr;// array(3, 1, 2, 2, 4);

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
        return $array_final;


    }

    public function QuestaoDois(int $n)
    {
        function fibonacci($a, $zero = false){
            if($a >= 2){ 
                $m = ($zero) ? [0,1] : [1,1]; 
                for($i = 2; $i < $a; $i++){
                    $m[$i] = $m[$i-1] + $m[$i-2];		
                }
                return $m;
            }
            return ($a == 1) ? [1] : [];
        }
         
        //exibindo os primeiros n números da seuqneica  de fibonacci,  iniciando por  0
        $seq = fibonacci(10, true);
        foreach($seq as $u){
            return (end($seq) == $u) ? $u : $u.', ';	
        }
    }

    public function QuestaoTres(string $s)
    {

    }

    public function QuestaoQuatro(int $n, array $a, array $b, array $v)
    {

    }
}
