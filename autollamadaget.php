<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="includes/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script src="includes/jquery/jquery-3.6.0.min.js"></script>
    <title>Hello, world!</title>
</head>
<body>
    


<a href="autollamadaget.php?valor=12">hola</a>

<?php
if (!$_GET) {
    echo "No hay get";
} else {
    echo "Se cumple la condicion";
    $valor = $_GET["valor"];
    echo "<br>";
    echo "El valor es: ".$valor;
}
?>
</body>
</html>