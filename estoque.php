<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
    <section class="d-flex">
        <nav class="col-2">
            <?php require_once "./html/navbar.php"; ?>
        </nav>
        <main class="col-10">
            <section class="px-4 pt-4 pb-4">
                <div>
                    <h1 class="fs-2 pb-4">Estoque</h1>
                </div>

                <div class="row d-flex gap-5">
                    <div class="card d-flex p-3 col-4">
                        <h1 class="fs-5 pb-4">Adicionar Chave</h1>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Código</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Código</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quantidade</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Custo</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Valor de venda</label>
                                <input type="text" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary col-12">Adicionar ao estoque</button>
                    </div>

                    <div class="card d-flex p-3 col-7">
                        <div class="d-flex gap-5 pb-3 align-items-center">
                            <div class="inputSearch col-4 d-flex justify-content-between">
                                <input type="text" placeholder="Filtrar" name="SearchBar" title="Busque aqui">
                                <img src="assets/img/SearchIcon.svg" alt="Icone ilustrativo de lupa">
                            </div>
                            <span>Ordenar</span>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr align="center">
                                    <th>#</th>
                                    <th>Item</th>
                                    <th>Qtd.</th>
                                    <th>Custo</th>
                                    <th>Valor da venda</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr align="center">
                                    <th>512</th>
                                    <td>Chave Mestra</td>
                                    <td>200</td>
                                    <td>R$25,00</td>
                                    <td>R$35,00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </form>
                </div>

                </div>
            </section>
        </main>
    </section>
</body>

</html>