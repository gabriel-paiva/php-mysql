<?php

  require_once("../lib/connectionBaseTeste.php");

  extract($_POST);

  $sqlSelectUsuario = "SELECT * FROM usuario WHERE nome = :name and senha = :password";
  $verificationUser = $connection->prepare($sqlSelectUsuario);
  $verificationUser->bindValue(":name", $name);
  // $verificationUser->bindValue(":password", sha1($password));
  $verificationUser->bindValue(":password", $password);
  $verificationUser->execute();

  if ($verificationUser->rowCount() === 1) {
    $user = $verificationUser->fetch(PDO::FETCH_OBJ);

    session_start();
    $_SESSION['userName'] = $user->NOME;
    header("location: ../index.php");
  } 
  else{
    header("location: ../login.php?sucess=0");
  }
?>