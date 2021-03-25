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
            <a class="navbar-brand" href="">Tablas Autogeneradas</a>
        </div>
    </nav>

    <div class=" mt-4 col col-6 mx-auto">
        <table class="table table-striped table-sm">

            <?php
            if (!$_GET) {

                for ($i = 1; $i <= 10; $i++) {
                    echo "<tr>";
                    echo "<td> ver la tabla del $i</td>";
                    echo "<td><a class='btn-outline-dark' href='tablasautoGeneradas.php?tabla=$i'>></a></td>";
                    echo "</tr>";
                }
            } else {
                $tabla = $_GET["tabla"];
            ?>
        </table>
    </div>


    <div class=" col col-6 mx-auto">
        <table class="table table-borderless table-sm">
            <?php
                for ($i = 0; $i <= 10; $i++) {
                    echo "<tr><td>$tabla X $i</td><td>=</td><td>" . $tabla * $i . "</td></tr>\n";
                }
            ?>
        </table>
        <a class="btn btn-danger" href="tablasautoGeneradas.php">Regresar</a>
    </div>
<?php
            }
?>
<a class="btn btn-danger fixed-bottom" href="index.php">Regresar</a>


</body>

</html>