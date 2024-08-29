<?php

    extract($_GET);

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chaveiro Tatuí || Acessar</title>

        <?php 
            require_once("html/componentsImport.php");
        ?>

        <link rel = "stylesheet" href = "assets/css/style.css">
        <link rel = "stylesheet" href = "assets/css/loginPage.css">
        <link rel = "stylesheet" href = "assets/css/mediaQuery.css">

        <script src = "assets/javascript/passwordInteration.js" defer></script>
        <script src = "assets/javascript/inputAnimation.js" defer></script>
    </head>
    <body>
        <main>
            <div class = "formSide loginPage">
                <form action = "./functions/logFuncionario.php" method = "POST" class = "card">
                    <div class = "logoArea">
                        <img src = "assets/img/logotipo.svg" alt = "Logotipo da empresa Chaveiro Tatuí">
                        
                        <h2 class = "paragraph02">Entrar na conta</h2>
                    </div>

                    <?php
                        if( isset($sucess) and !($sucess) ){
                    ?>

                        <span class = "error noOpacity">
                            Verifique se as credenciais inseridas estão corretas...
                        </span>

                    <?php 
                        }
                    ?>
                    
                    <div class = "field noOpacity">
                        <label for = "name" class = "paragraph01">Nome</label>
                        <div class = "inputIconGroup">
                            <input type = "text" id = "name" name = "name" title = "Digite seu nome aqui" placeholder = "Digite seu nome aqui..." class = "inputComponent" autocomplete = "off" required> 

                            <img class = "iconInput" src = "assets/img/icon/form/people.svg" alt = "Ilustração de uma pessoa" title = "Nome">
                        </div>
                    </div>
                    <div class = "field noOpacity">
                        <label for = "password" class = "paragraph01">Senha</label>
                        <div class = "inputIconGroup">
                            <input type = "password" id = "password" name = "password" title = "Digite sua senha aqui" placeholder = "Digite sua senha aqui..." class = "inputComponent" autocomplete = "off" required>

                            <img id = "senhaOption" class = "iconInput invisible" src = "assets/img/icon/form/closedEye.svg" alt = "Ilustração de olho fechado" title = "Revelar senha">
                        </div>
                    </div>
                    <button type = "submit" class = "buttonComponent noOpacity paragraph01">
                        Acessar
                    </button>
                </form>
            </div>
            <div class = "imageSide">
                <h1 class = "paragraph01">
                    Bem vindo de volta <br>
                    pronto para o trabalho?
                </h1>
            </div>
        </main>
    </body>
</html>