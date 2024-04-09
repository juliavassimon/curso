<?php


$idade = 10;
$numerodepessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou a partir 
            de 16 anos acompanhado <br/>";

if ($idade >= 18){
    echo "Pode entrar sozinho. <br/>";
}
else if($idade >=16 && $numerodepessoas > 1){
     
        echo "Você tem $idade anos. Pode entrar acompanhado.";
    }
    else{
    echo "Você só tem $idade anos. Você não pode entrar";
    }


