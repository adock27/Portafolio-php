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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-md">
            <a class="navbar-brand" href="">Calcular volumen cilindro</a>
        </div>
    </nav>


    <div class="col-3 mx-auto">
        <div class="card-body">
            <form action="volumenCilindro.php" method="post">
                <label for="exampleInputEmail1" class="form-label">Altura</label>
                <input class="form-control" type="number" name="numero" id="numero" required>
                <br>
                <label for="exampleInputEmail1" class="form-label">radio</label>
                <input class="form-control" type="number" name="numero1" id="numero1" required>
                <div class="mt-2">
                    <button class="btn btn-success" type="submit">Calcular</button>
                </div>
            </form>
        </div>

        <?php
        if (!$_POST) {
            echo "";
        } else {
            echo "Se cumple la condicion";
            $valor = $_POST["numero"];
            $valor1 = $_POST["numero1"];
            echo "<br>";
            echo "El valor del post es: " . $valor;
            echo "<br>";
            echo "El valor del post es: " . $valor1;
            echo "<br>";
            echo "la suma es: " . ($valor + $valor1);
        }

        ?>
    </div>


    <a class="btn btn-danger fixed-bottom" href="index.php">Regresar</a>

</body>

</html>