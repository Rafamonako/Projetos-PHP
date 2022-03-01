<html lang="">
<head>
    <title>Primos</title>
</head>
<body>
<form action="Primos.php" method="get">
    <p>Seu número: <label>
            <input type="text" name="name" />
        </label></p>
    <p><input type="submit" /></p>
</form>

<?php

$Num = $_GET['name'];

for ($i=2; $i<$Num; $i++)

    if ($Num == 0) {
    echo "O número ".$_GET['name']." é neutro!";
    } elseif ($Num % $i == 0 or $i == $Num) {
    echo "O número ".$_GET['name']." é primo!";
    } else {
    echo "O número ".$_GET['name']." não é primo!";
    }

?>
</body>
</html>