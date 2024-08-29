<?php 
    session_start();
    $_SESSION["userName"] = "Confinack";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chaveiro Tatuí - Funcionários</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <?php 
            require_once("html/componentsImport.php");
        ?>

        <link rel = "stylesheet" href = "assets/css/style.css">
        <link rel = "stylesheet" href = "assets/css/employers.css">
    </head>
    <body class = "d-flex justify-content-center align-items-center">
        <?php
            require_once("html/navbar.php");
        ?>

        <main class = "d-flex flex-wrap justify-content-between gap-5">
            <div class = "card background">

            </div>
            <div class = "card background cardAdd">

            </div>
            <div class = "card background">

            </div>
            <div class = "card background">

            </div>
            <div class = "card background">

            </div>
            <div class = "card background">

            </div>
        </main>
    </body>
</html>