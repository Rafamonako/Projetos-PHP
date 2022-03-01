<html lang="">
<head>
    <title>Par ou Ímpar</title>
</head>
<body>
<form action="Par_Ou_Impar.php" method="get">
    <p>Seu número: <label>
            <input type="text" name="name" />
        </label></p>
    <p><input type="submit" /></p>
</form>

<?php

$Num = $_GET['name'];
$resto = $Num % 2;

    if ($Num == 0) {
        echo "O número ".$_GET['name']." é neutro!";
    } elseif ($resto == 0) {
        echo "O número ".$_GET['name']." é par!";
    } else {
        echo "o número ".$_GET['name']." é ímpar!";
    }

?>
</body>
</html>