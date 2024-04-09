<?php
//lista/array/vetor são passados por []
$idadeList = [15,18,25,30];
//para acessar o vetor é pelo indice (começa com 0)
$umaIdade = $idadeList[0];
echo "$umaIdade<br/>";
echo "<br/>";
//exibir toda a array - loop
for ($i = 0; $i<4; $i++){
    echo "$idadeList[$i] <br/>";
}
echo "<br/>";
//para saber o tamanho de uma lista
echo count($idadeList);
echo "<br/>";
echo "<br/>";
//adicionar item no array
//se n informa o indice [], o php já coloca na ultima posição
$idadeList[] = 20;
foreach ($idadeList as $idade){
    echo $idade. "<br/>";
}
