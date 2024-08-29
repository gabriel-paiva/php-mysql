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
            <div class = "card background p-2">
                <div class = "cardHeader d-flex justify-content-center align-items-center">
                    <span>Confinack</span>
                </div>
                <div class = "cardBody d-flex gap-2 justify-content-center align-items-center">
                    <img src = "assets/img/IconExemple.jpg" alt = "Funcionario icone">
                    <div class = "cardBodyInfos d-flex flex-collumn flex-wrap justify-content-between align-items-center gap-2 p-1">
                        <div class = "infoContainer">
                            <span>Nome:</span>
                            <span>Confinack</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Cargo:</span>
                            <span>Estagiário</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Endereço:</span>
                            <span>Tatuí</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Carga horária:</span>
                            <span>40h/s</span>
                        </div>
                        <div class = "infoContainer">
                            <span>CPF:</span>
                            <span>123456789009</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Salário:</span>
                            <span>2250.00 reais</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Telefone:</span>
                            <span>(15) 4002-8922</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Trabalhos:</span>
                            <span>15</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "card background p-2">
                <div class = "cardHeader d-flex justify-content-center align-items-center">
                    <span>Confinack</span>
                </div>
                <div class = "cardBody d-flex gap-2 justify-content-center align-items-center">
                    <img src = "assets/img/IconExemple.jpg" alt = "Funcionario icone">
                    <div class = "cardBodyInfos d-flex flex-collumn flex-wrap justify-content-between align-items-center gap-2 p-1">
                        <div class = "infoContainer">
                            <span>Nome:</span>
                            <span>Confinack</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Cargo:</span>
                            <span>Estagiário</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Endereço:</span>
                            <span>Tatuí</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Carga horária:</span>
                            <span>40h/s</span>
                        </div>
                        <div class = "infoContainer">
                            <span>CPF:</span>
                            <span>123456789009</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Salário:</span>
                            <span>2250.00 reais</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Telefone:</span>
                            <span>(15) 4002-8922</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Trabalhos:</span>
                            <span>15</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "card background p-2">
                <div class = "cardHeader d-flex justify-content-center align-items-center">
                    <span>Confinack</span>
                </div>
                <div class = "cardBody d-flex gap-2 justify-content-center align-items-center">
                    <img src = "assets/img/IconExemple.jpg" alt = "Funcionario icone">
                    <div class = "cardBodyInfos d-flex flex-collumn flex-wrap justify-content-between align-items-center gap-2 p-1">
                        <div class = "infoContainer">
                            <span>Nome:</span>
                            <span>Confinack</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Cargo:</span>
                            <span>Estagiário</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Endereço:</span>
                            <span>Tatuí</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Carga horária:</span>
                            <span>40h/s</span>
                        </div>
                        <div class = "infoContainer">
                            <span>CPF:</span>
                            <span>123456789009</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Salário:</span>
                            <span>2250.00 reais</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Telefone:</span>
                            <span>(15) 4002-8922</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Trabalhos:</span>
                            <span>15</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "card background p-2">
                <div class = "cardHeader d-flex justify-content-center align-items-center">
                    <span>Confinack</span>
                </div>
                <div class = "cardBody d-flex gap-2 justify-content-center align-items-center">
                    <img src = "assets/img/IconExemple.jpg" alt = "Funcionario icone">
                    <div class = "cardBodyInfos d-flex flex-collumn flex-wrap justify-content-between align-items-center gap-2 p-1">
                        <div class = "infoContainer">
                            <span>Nome:</span>
                            <span>Confinack</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Cargo:</span>
                            <span>Estagiário</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Endereço:</span>
                            <span>Tatuí</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Carga horária:</span>
                            <span>40h/s</span>
                        </div>
                        <div class = "infoContainer">
                            <span>CPF:</span>
                            <span>123456789009</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Salário:</span>
                            <span>2250.00 reais</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Telefone:</span>
                            <span>(15) 4002-8922</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Trabalhos:</span>
                            <span>15</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "card background p-2">
                <div class = "cardHeader d-flex justify-content-center align-items-center">
                    <span>Confinack</span>
                </div>
                <div class = "cardBody d-flex gap-2 justify-content-center align-items-center">
                    <img src = "assets/img/IconExemple.jpg" alt = "Funcionario icone">
                    <div class = "cardBodyInfos d-flex flex-collumn flex-wrap justify-content-between align-items-center gap-2 p-1">
                        <div class = "infoContainer">
                            <span>Nome:</span>
                            <span>Confinack</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Cargo:</span>
                            <span>Estagiário</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Endereço:</span>
                            <span>Tatuí</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Carga horária:</span>
                            <span>40h/s</span>
                        </div>
                        <div class = "infoContainer">
                            <span>CPF:</span>
                            <span>123456789009</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Salário:</span>
                            <span>2250.00 reais</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Telefone:</span>
                            <span>(15) 4002-8922</span>
                        </div>
                        <div class = "infoContainer">
                            <span>Trabalhos:</span>
                            <span>15</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "card background cardAdd">

            </div>
        </main>
    </body>
</html>