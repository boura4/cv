<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 echo "<br>";

 $s=date("s");
 echo $s;
 if ($s%2==0)
    echo $s."nombre de seconde est pair";
 else 
 echo $s."nombre de seconde est impaire";

    
    ?>  

    
</body>
</html>