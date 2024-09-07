<?php
session_start();
$_SESSION["userName"] = "Confinack";

if (!isset($_SESSION['userName'])) {
	header("location: ./login.php");
}

// session_destroy();

require_once("./lib/connectionBaseTeste.php");

// $sqlSelectServices = "SELECT * FROM atendimento ORDER BY ID DESC LIMIT 18";
// $sqlSelectEmployers = "SELECT * FROM usuario LIMIT 6";
// $stmtS = $connection->query($sqlSelectServices);
// $stmtE = $connection->query($sqlSelectEmployers);

// $services = $stmtS->fetchAll(PDO::FETCH_OBJ);
// $employers = $stmtE->fetchAll(PDO::FETCH_OBJ);
?>

<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>index</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css">
	<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
	<script defer src="https://cdn.datatables.net/2.1.4/js/dataTables.min.js"></script>

	<link rel="stylesheet" href="./assets/css/style.css">

	<style>
		* {
			/* outline: red 1px solid; */
		}
	</style>
</head>

<body>
	<nav>
		<?php require_once "./html/navbar.php"; ?>
	</nav>

	<section class="d-flex">


		<main class="col-10">
			<section class="px-4 pt-4">
				<div>
					<h1 class="fs-2">Resumo</h1>
				</div>
				<div class="d-flex gap-5 my-4">
					<div class="card-info col"></div>
					<div class="card-info col"></div>
					<div class="card-info col"></div>
				</div>

				<div class="d-flex gap-4">
					<div class="card-table d-flex card col-10 p-3 mb-3">
						<div class="d-flex flex-row justify-content-between align-items-center">
							<span class="fs-5 fw-medium">Últimos serviços</span>
							<div class="inputSearch col-4 d-flex justify-content-between">
								<input type="text" placeholder="Filtrar" name="SearchBar" title="Busque aqui">
								<img src="assets/img/SearchIcon.svg" alt="Icone ilustrativo de lupa">
							</div>
						</div>
						<hr>

						<table class="table table-bordered">
							<thead>
								<tr align="center">
									<th>#</th>
									<th>Cliente</th>
									<th>Valor</th>
									<th>Saiba mais</th>
								</tr>
							</thead>
							<tbody class="table-group-divider">
								<tr align="center">
									<th>1</th>
									<td>Mark</td>
									<td>R$20,00</td>
									<td><img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais">
									</td>
								</tr>
								<tr align="center">
									<th>2</th>
									<td>Jacob</td>
									<td>R$40,00</td>
									<td><img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais">
									</td>
								</tr>
								<tr align="center">
									<th>2</th>
									<td>Jacob</td>
									<td>R$40,00</td>
									<td><img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais">
									</td>
								</tr>
								<tr align="center">
									<th>2</th>
									<td>Jacob</td>
									<td>R$40,00</td>
									<td><img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais">
									</td>
								</tr>
								<tr align="center">
									<th>2</th>
									<td>Jacob</td>
									<td>R$40,00</td>
									<td><img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais">
									</td>
								</tr>
								<tr align="center">
									<th>2</th>
									<td>Jacob</td>
									<td>R$40,00</td>
									<td><img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais">
									</td>
								</tr>
								<tr align="center">
									<th>2</th>
									<td>Jacob</td>
									<td>R$40,00</td>
									<td><img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais">
									</td>
								</tr>
								<tr align="center">
									<th>2</th>
									<td>Jacob</td>
									<td>R$40,00</td>
									<td><img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais">
									</td>
								</tr>
								<tr align="center">
									<th>2</th>
									<td>Jacob</td>
									<td>R$40,00</td>
									<td><img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais">
									</td>
								</tr>
								<tr align="center">
									<th>2</th>
									<td>Jacob</td>
									<td>R$40,00</td>
									<td><img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais">
									</td>
								</tr>
								<tr align="center">
									<th>2</th>
									<td>Jacob</td>
									<td>R$40,00</td>
									<td><img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais">
									</td>
								</tr>
								<tr align="center">
									<th>2</th>
									<td>Jacob</td>
									<td>R$40,00</td>
									<td><img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais">
									</td>
								</tr>
								<tr align="center">
									<th>2</th>
									<td>Jacob</td>
									<td>R$40,00</td>
									<td><img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais">
									</td>
								</tr>
								<tr align="center">
									<th>2</th>
									<td>Jacob</td>
									<td>R$40,00</td>
									<td><img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais">
									</td>
								</tr>
								<tr align="center">
									<th>2</th>
									<td>Jacob</td>
									<td>R$40,00</td>
									<td><img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais">
									</td>
								</tr>
								<tr align="center">
									<th>2</th>
									<td>Jacob</td>
									<td>R$40,00</td>
									<td><img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais">
									</td>
								</tr>
								<tr align="center">
									<th>2</th>
									<td>Jacob</td>
									<td>R$40,00</td>
									<td><img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais">
									</td>
								</tr>
								<tr align="center">
									<th>2</th>
									<td>Jacob</td>
									<td>R$40,00</td>
									<td><img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="py-2 card-employer card col justify-content-between align-items-center">
						<span class="fw-medium">Funcionários</span>

						<div class="col-12 d-flex flex-column align-items-center ">

							<div class="hr col-12"></div>

							<div>
								<span class="">Ver mais</span>
								<img src="./assets/img/BoxArrowUpRight.png" alt="Saiba mais" title="Saiba mais">
							</div>

						</div>
					</div>
				</div>
			</section>
		</main>
	</section>
</body>

</html>