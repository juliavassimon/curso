<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function soma ($a, $b){
        $s = $a + $b;
        echo "A soma vale $s";
    }
    soma(3,4); 
    echo "<br/>";
    soma(8,4);
    echo "<br/>";
    $x = 7;
    $y = 10;
    soma($x, $y);
    ?>
</body>
</html>