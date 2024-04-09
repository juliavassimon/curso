<?php

/*$contador = 1;

for ($contaador = 1; $contador <= 15; $contador ++){
    echo "#$contador <br/>";
}*/
//Crie um loop que conte de 5 a 15 e exiba apenas os números pares
for($n = 5; $n <= 15; $n ++){
    if($n %2 ==0){
        echo "#$n <br/>";
    }
}
echo "<br/>";
//Implemente um loop que exiba a tabuada do 7 (de 7x1 a 7x10)
for($i = 1; $i <=10; $i ++){
    $r = 7*$i;
    echo "7x $i <br/>";
}
echo "<br/>";
//Escreva um loop que conte de 20 a 10, 
//subtraindo 2 em cada iteração, e exiba os valores na tela.
for($i = 20; $i >=10; $i-=2){
    echo "#$i <br/>";
}
echo "<br/>";
//Crie um loop que exiba os números de 1 a 100, 
//substituindo os múltiplos de 3 pela palavra "Fizz" 
//e os múltiplos de 5 pela palavra "Buzz". 
//Para os números que são múltiplos de ambos (3 e 5), exiba "FizzBuzz"

for($i = 1; $i <= 50; $i++){
    if($i % 3 ==0 && $i %5 ==0){
        echo "FizzBuzz <br/>";
    }
    elseif($i %3 ==0){
        echo "Fizz <br/>";
    }
    elseif($i %5 ==0){
        echo "Buzz <br/>";
    }
    elseif($i ==1){
        //echo "Pulado <br/>";
        continue;
    }
    else{
        echo "$i <br/>";
    }

}



