<html lang="">
<head>
    <title>Palíndromo</title>
</head>
<body>
<form action="Palíndromo.php" method="get">
    <p>Sua palavra: <label>
            <input type="text" name="name" />
        </label></p>
    <p><input type="submit" /></p>
</form>

<?php
$Palavra = $_GET["name"];
$Converte = strtolower($Palavra);
$Inverte = strrev($Converte);

    if ($Inverte == $Converte) {
        echo "A palavra ".$_GET["name"]." é um palíndromo!";
    } else {
        echo "A palavra ".$_GET["name"]." não é um palíndromo!";
    }

?>
</body>
</html>