<?php
//foreach = para cada
//foreach é feito para percorrer todos os elementos de um array 
//sem a necessidade de usar um contador ou índice
/*$conta1 = ['nome' => 'Júlia', 
            'saldo' => 1000];
$conta2 = ['nome' => 'Maria', 
            'saldo' => 5000];
$conta3 = ['nome' => 'Marcia', 
            'saldo' => 3000];*/
$contasCorrentes = [
    16956263 => ['nome' => 'Júlia', //ao inves de ter variaves, temos os dados das variaveis dentro do array
    'saldo' => 1000], //modificando os indices da arrays (cpf)
    41161260 => ['nome' => 'Maria', 
    'saldo' => 5000], 
    12345678 => ['nome' => 'Marcia', 
    'saldo' => 3000]];
foreach($contasCorrentes as $cpf=> $contas){
    echo $cpf."<br/>";
}

