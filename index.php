<?php
    session_start();
    $_SESSION["userName"] = "Confinack";

    if (!isset($_SESSION['userName'])) {
        header("location: ./login.php");
    }

    // session_destroy();

    require_once ("./lib/connectionBaseTeste.php");

    $sqlSelectServices = "SELECT * FROM atendimento ORDER BY ID DESC LIMIT 18";
    $sqlSelectEmployers = "SELECT * FROM usuario LIMIT 6";
    $stmtS = $connection->query($sqlSelectServices);
    $stmtE = $connection->query($sqlSelectEmployers);

    $services = $stmtS->fetchAll(PDO::FETCH_OBJ);
    $employers = $stmtE->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chaveiro Tatuí - Home page</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <?php 
            require_once("html/componentsImport.php");
        ?>

        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/index.css">

    </head>
    <body>
        <?php
            require_once ("html/navbar.php");
        ?>
        <main>

            <div class="mainTopSide">
                <h1 class="titleH1">Resumo</h1>
                <section id="cardGroup">
                    <div class="card background">

                    </div>
                    <div class="card background">

                    </div>
                    <div class="card background">

                    </div>
                </section>
            </div>


            <div class="mainBottomSide">
                <section id="lastServices" class="background">
                    <div class="lastServicesHeader">
                        <h3 class="titleH3">Ultimos serviços</h3>

                        <div class="inputSearch">
                            <input type="text" placeholder="Filtrar" name="SearchBar" title="Busque aqui">
                            <img src="assets/img/SearchIcon.svg" alt="Icone ilustrativo de lupa">
                        </div>
                    </div>
                    <hr>

                    <table class="table table-hover">
                        <thead class="">
                            <tr align=center>
                                <th>ID</th>
                                <th>Cliente</th>
                                <th>Valor</th>
                                <th>Saiba mais</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td>lorem</td>
                                <td>lorem</td>
                                <td>lorem</td>
                                <td><img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais"></td>
                            </tr>
                        </tbody>
                    </table>


                    <!-- <table>
                            18 linhas
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Cliente</th>
                                    <th>Valor</th>
                                    <th>Saiba mais</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($services as $service) {
                                    ?>
                                    <tr>
                                        <td><?= $service->ID ?></td>
                                        <td><?= $service->CLIENTE ?></td>
                                        <td>R$<?= $service->PRECO ?></td>
                                        <td><img src = "./assets/img/BoxArrowUpRight.png" alt = "Saiba mais" title = "Saiba mais"></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>   -->
                </section>

                <section id="employers" class="background">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="3">Funcionarios</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($employers as $employer) {
                                ?>
                                <tr>
                                    <td><img src="./assets/img/IconExemple.jpg" alt="Foto do funcionario"></td>
                                    <td><?= $employer->NOME ?></td>
                                    <td>Estagiário</td>
                                </tr>
                                <?php
                            }
                            ?>

                        </tbody>
                    </table>
                    <div class="info">
                        Ver mais
                        <img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais">
                    </div>
                </section>
            </div>
        </main>
    </body>
</html>