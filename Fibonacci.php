<html lang="">
<head>
    <title>Apostila PHP Progressivo</title>
</head>
<body>
<form action="Fibonacci.php" method="get">
    <p>Seu número: <label>
            <input type="text" name="name" />
        </label></p>
    <p><input type="submit" /></p>
</form>
<?php
$Num = $_GET['number'];
$N0 = 0;
$N1 = 1;
$N2 = 1;
$Fibonacci = array($N0);

foreach (range(0, 1000) as $Number) {
    $N2=$N1 + $N0;
    $N0=$N1;
    $N1=$N2;
    $Fibonacci[] = $N0;
}

if (in_array($Num, $Fibonacci)) {
    echo "O número " . $_GET["name"] . " está na sequência!";
} else {
    echo "O número " . $_GET["name"] . " não está na sequência!";
}

?>
</body>
</html>