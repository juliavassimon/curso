<?php
//isolando uma parte do codigo (função pra quebrar linha)
//quando faz função, precisa chamar ela colocando os parametros entre ()
//nem smp uma subrotina precisa de parametro 
//uma função só reconhece a variavel quando ela é declarada dentro da função
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
$contasCorrentes = [
    '169.562.630-00'=> ['nome' => 'Júlia',  
    'saldo' => 1000], 
    '411.612.605.97' => ['nome' => 'Maria', 
    'saldo' => 5000], 
    '123.456.780.10' => ['nome' => 'Marcia', 
    'saldo' => 500]];
$contasCorrentes['123.456.780.10'] = sacar($contasCorrentes['123.456.780.10'],500);
foreach($contasCorrentes as $cpf=> $conta){
   exibeMensagem($cpf." ". $conta['nome'] . ' ' . $conta['saldo']);
} 

