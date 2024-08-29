<nav>
    <div id = "usuario">
        <img src = "assets/img/IconExemple.jpg" alt = "Icone pessoal do usuario">
        <span id = "nomeUsuario" class = "paragraph02"><?= $_SESSION['userName']?><span>
    </div>

    <hr>
    
    <div id = "menu">
        <div class = "pageOption">
            <img src = "assets/img/icon/nav/addService.svg" alt = "Adicionar serviço">
            <a href = "#" class = "paragraph01">PDV</a>
        </div>
        <div class = "pageOption">
            <img src = "assets/img/icon/nav/home.svg" alt = "Ilustração de casa">
            <a href = "index.php" class = "paragraph01">Inicio</a>
        </div>
        <div class = "pageOption">
            <img src = "assets/img/icon/nav/servicesDone.svg" alt = "Adicionar serviço">
            <span class = "paragraph01">Serviços</span>
        </div>
        <div class = "pageOption">
            <img src = "assets/img/icon/nav/graphic.svg" alt = "Ilustração de gráfico">
            <span class = "paragraph01">Gráficos</span>
        </div>
        <div class = "pageOption">
            <img src = "assets/img/icon/nav/stock.svg" alt = "Ilustração de documento concluido">
            <span class = "paragraph01">Estoque</span>
        </div>
        <div class = "pageOption">
            <img src = "assets/img/icon/nav/stock.svg" alt = "Ilustração de documento concluido">
            <a href = "employers.php" class = "paragraph01">Funcionarios</a>
        </div>
    </div>
    
    <hr>
</nav>
