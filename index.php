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
            <a class="navbar-brand" href="">Portafolio</a>
        </div>
    </nav>
    <center>
        <table class="table-hover" style="width:50%">
            <?php
            $temas = array(
                array("Calcular volumen Cilindro", "volumenCilindro.php"),
                array("Tablas de multiplicar autogeneradas", "tablasautoGeneradas.php"),
                array("Tiempo, Hora, fecha y demas", "tiempo.php"),
                array("Auto llamada GET", "autollamadaget.php")
            );
            echo
            "<tr>
                <th>Titulo</th>
                <th>Ruta</th>
            </tr>";

            for ($row = 0; $row < count($temas); $row++) {
                echo "<tr>";
                for ($col = 0; $col < 1; $col++) {
                    echo "<td>" . $temas[$row][0] . "</td>";
                    echo "<td><a class='btn btn-outline-dark' href=" . $temas[$row][1] . ">></td>";
                }

                echo "</tr>";
            }


            ?>


        </table>

    </center>


    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            padding: 7px;
            text-align: left;
        }
    </style>
</body>

</html>