<?php
$contasCorrentes = [
    //é uma rotina pq smp q executar o codigo, ele faz a mesma coisa
    '169.562.630-00'=> ['nome' => 'Júlia', //ao inves de ter variaves, temos os dados das variaveis dentro do array
    'saldo' => 1000], //modificando os indices da arrays (cpf)
    '411.612.605.97' => ['nome' => 'Maria', 
    'saldo' => 5000], 
    '123.456.780.10' => ['nome' => 'Marcia', 
    'saldo' => 200]];
//sacar 500
//$contasCorrentes['123.456.780.10']['saldo'] -= 500;
//não podemos ter saldo negativo 
if(500>$contasCorrentes['123.456.780.10']['saldo']){
    echo "Saldo insuficiente <br/>";
}else{
    $contasCorrentes['123.456.780.10']['saldo'] -= 500;
echo "<br/>";
}
foreach($contasCorrentes as $cpf=> $conta){
    echo $cpf." ". $conta['nome'] . ' ' . $conta['saldo'] . "<br/>";
} 