
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <LABel>valor:</LABel>
    <input type="number" name="valor">
    <br><br>
    <input type="submit" value="calcular">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$valor = $_POST["valor"];
$v1 = $valor*0.05;
$v2 = $valor*0.5;

echo "5% deste numero é: $v1 </br>";
echo "50% deste numero é: ",$v2;


}

?>


</body>
</html>