<?php
$contasCorrentes = [
    16956263 => ['nome' => 'Júlia', 
    'saldo' => 1000], 
    41161260 => ['nome' => 'Maria', 
    'saldo' => 5000], 
    12345678 => ['nome' => 'Marcia', 
    'saldo' => 3000]];

//adicionando dados na array já definida
$contasCorrentes[19334578] = ['nome' => 'Fernanda', 
    'saldo' => 100];

foreach($contasCorrentes as $cpf=> $contas){
    echo $contas['nome']."<br/>";
}
//não da pra usar o indice vazio quando tiver array associativo, principalmente
//se for uma string
