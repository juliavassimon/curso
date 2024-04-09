<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*//função pra somar 2 valores inteiros
        function soma($n1, $n2){
            $s = $n1 + $n2;
            return $s;
            //pode ter return $n1+$n2;
        }
        $x = 2;
        $y = 5;
        $r = soma($x, $y);
        echo "A soma vale $r";*/
        function soma(){
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            for( $i = 0; $i<$t; $i++){
                $s += $p[$i];
            }
            return $s;
        }
        $r = soma(3,5,2);
        echo "A soma dos valores é $r";

    ?>
</body>
</html>