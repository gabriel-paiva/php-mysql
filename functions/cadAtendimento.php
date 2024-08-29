<?php 

    require_once("../lib/connectionBaseTeste.php");
    mb_internal_encoding('UTF-8'); /* Permite caracteres que usamos no Brasil, como acentos, cedilha, etc. */
    extract($_POST);

    $sqlInsertAtendimento = "INSERT INTO atendimento VALUES (0, :funcionario, :cliente, :preco, :endereco)";
    $stmt = $connection->prepare($sqlInsertAtendimento);
    $stmt->bindValue(":funcionario", $employer);
    $stmt->bindValue(":cliente", $client);
    $stmt->bindValue(":preco", $serviceValue);
    $stmt->bindValue(":endereco", $adress);
    $stmt->execute();

    header("location: ../services.php?sucess=1");

?>