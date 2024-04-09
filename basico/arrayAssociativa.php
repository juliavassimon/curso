<?php
//é tipo um mapa. tem varios tipos de variaveis
//então podemos associar o nome de uma variavel a um valor 
// com =>
$conta1 = ['nome' => 'Júlia', 
            'saldo' => 1000];
//para acessar os valores:
//é assim pq estamos nomeando os indices
//$conta1['nome'];
$conta2 = ['nome' => 'Maria', 
            'saldo' => 5000];
$conta3 = ['nome' => 'Marcia', 
            'saldo' => 3000];
$contasCorrentes = [$conta1, $conta2, $conta3];
//forma simples de mostrar o conteudo de uma array
for($i = 0; $i < count($contasCorrentes); $i ++){
    echo $contasCorrentes[$i]['nome'] ."<br/>";
}
