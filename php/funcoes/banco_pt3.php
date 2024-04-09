<?php
function exibeMensagem ($mensagem){ //é uma subrotina
    echo $mensagem . "<br/>";
}
function sacar($conta, $valorASacar){
    if($valorASacar > $conta['saldo']){
        exibeMensagem("Saldo insuficiente");
    }else{
        $conta['saldo'] -= $valorASacar;
    echo "<br/>";
    
    }return $conta;
}
function depositar($conta, $valorADepositar){
    if($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    
        exibeMensagem("Valor depositado");
    }else{
        exibeMensagem("Valor não depositado");
    }
    return $conta;

}
$contasCorrentes = [
    '169.562.630-00'=> ['nome' => 'Júlia',  
    'saldo' => 1000], 
    '411.612.605.97' => ['nome' => 'Maria', 
    'saldo' => 5000], 
    '123.456.780.10' => ['nome' => 'Marcia', 
    'saldo' => 500]];
$contasCorrentes['123.456.780.10'] = sacar($contasCorrentes['123.456.780.10'],500);
$contasCorrentes['123.456.780.10'] = depositar($contasCorrentes['123.456.780.10'],100);
foreach($contasCorrentes as $cpf=> $conta){
   exibeMensagem($cpf." ". $conta['nome'] . ' ' . $conta['saldo']);
   //echo "$cpf  $conta[nome] $conta[saldo']";
} 
