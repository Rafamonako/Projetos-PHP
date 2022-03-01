<html lang="">
<head>
    <title>Contador de Letras</title>
</head>
<body>
<form action="Contador_de_Palavras.php" method="get">
    <p>Sua Frase: <label>
            <input type="text" name="name" />
        </label></p>
    <p><input type="submit" /></p>
</form>

<?php

$frase = $_GET['name'];
$palavras = explode(" ", $frase);
echo "A frase \"" . $frase . "\" contém " .
    count($palavras) . " palavras";

?>
</body>
</html>