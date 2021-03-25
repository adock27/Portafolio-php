<!doctype html>
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


    <!-- alinear contenido vertical y horizontalmente -->
    <div class="row align-items-center justify-content-center vh-100">

        <div class="text-center">


            <div class="display-4" id="autorecarga">
                <!-- aqui se muestra mi hot reload -->
            </div>
            <div>
                <?php
                setlocale(LC_ALL, "es_ES");
                echo date("d") . " de " . date("F") . " de " . date("Y");
                ?>
            </div>

            <a class="btn btn-dark mt-2" href="index.php">Go back!</a>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(
            function() {
                setInterval(
                    function() {
                        // mi div a recargae  // datos a recargar
                        $('#autorecarga').load('time.php');
                    }, 1000 // segundos en mili
                );
            }
        );
    </script>

<style>
    body {
        background: #f12711;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #f5af19, #f12711);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #f5af19, #f12711); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
</style>

</body>

</html>