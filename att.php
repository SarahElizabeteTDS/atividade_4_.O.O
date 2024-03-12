<?php

$array = array(); 

function verificaPrimo($num)
{
    global $array;

    if ($num == 0)
    {
        print "Os números primos informados são: \n";
        foreach ($array as $a)
        {
            echo $a."-";
        }
            
        die;
    }elseif($num < 2){
        print "Número deve ser maior que 2";
        die;
    }
    
    for ($i = 2; $i <= sqrt($num); $i++) 
    {
        if ($num % $i == 0) 
        {
            return false;
        }
    }

    return true;
}

do 
{
   $num = readline("Informe um número para verificar se é primo ou não: \n");
   if (verificaPrimo($num)) 
   {
       echo $num . " é primo.\n";
       array_push($array, $num);
   }else{
       echo $num . " não é primo.\n";
   }

}while ($num >= 2 && $num != 0);
