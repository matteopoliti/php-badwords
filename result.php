<?php
$parolaCensurata = $_GET["parola"];
$paragrafoCensurato = $_GET["paragrafo"];
$censura = "***";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class=" bg-body-secondary ">

    <div class="text-center ">

        <div class=" d-flex justify-content-center ">
            <h3>Testo:</h3>
            <p class="border border-2 border-danger p-2 w-25 ms-3 ">
                <?php
                echo ucfirst($paragrafoCensurato);
                ?>
            </p>
        </div>
        <div class=" d-flex justify-content-center mb-3">
            <h3>Lunghezzza testo:</h3>
            <span class="border border-2 border-danger p-2 ms-3 ">
                <?php
                echo strlen($paragrafoCensurato);
                ?>
            </span>
        </div>
        <div class=" mb-3 d-flex justify-content-center">
            <h3>Parola da censurare:</h3>
            <span class="border border-2 border-danger p-2  ms-3 ">
                <?php
                echo $parolaCensurata;
                ?>
            </span>
        </div>

        <div class=" d-flex justify-content-center ">
            <h3>Testo censurato:</h3>
            <p class="border border-2 border-danger p-2 w-25 ms-3 ">
                <?php
                echo str_replace($parolaCensurata, $censura, $paragrafoCensurato);
                ?>
            </p>
        </div>

    </div>
</body>

</html>