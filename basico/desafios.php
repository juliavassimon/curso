<?php
//todos os numeros impares 

for($i =1; $i <=10; $i++){
    if($i %2 !=0){
        echo "$i <br/>";
    }
}
echo "<br/>";
//tatuada de 2
for($i = 1; $i <= 10; $i ++){
    $r = 2 * $i;
    echo "2 x $i = $r <br/>";
}
echo "<br/>";
//calcular o IMC 
$p = 60;
$alt = 1.60;
$imc = $p / $alt **2;
if($imc <18){
    echo "Abaixo";
}
elseif($imc <25){
    echo "Dentro";
}
else{
    echo "Acima";
}
echo "<br/>";
echo "Fim do primeiro curso";