<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="get" action="02-part2.php">
         <?php
            $c = 1;
            do{
                echo $c ."\n";
                $c++;
            }
            while( $c <-10);
            ?>
        </form>
    </div>
 </body>
</html>