<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   /* //criar um procedimento que use a passagem de parametros por referencia
    function teste($x){ //por valor
        $x += 2;
        echo "<p> O valor de x é $x </p>";
    }
    $a = 3;
    teste($a);
    echo "<p> O valor de a é $a </p>";*/
    function teste(&$x){ //por referencia
        //o valor de a vai ser passado como referencia pra variavel x
        //entao qualquer alteração em x vai alterar a 
        $x += 2;
        echo "<p> O valor de x é $x </p>";
    }
    $a = 3;
    teste($a);
    echo "<p> O valor de a é $a </p>";
    ?>
</body>
</html>