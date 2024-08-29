<?php 

    require_once("../lib/connectionBaseTeste.php");
    mb_internal_encoding('UTF-8'); /* Permite caracteres que usamos no Brasil, como acentos, cedilha, etc. */
    extract($_POST);

    $valid = true;
    $erroUrl = "../register.php?";
    $error = [];

    // Esqueci de trocar para "funcionario" ao invés de "usuario" na hora de importar o banco de dados
    $sqlInsertFuncionario = "INSERT INTO usuario VALUES (0, :nome, :senha, :CPF)";

    $passwordToArray = str_split($password);
    $upperCase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $number = "0123456789";
    $hasUpperCase = false;
    $hasNumber = false;

    // Caso a senha nao tenha entre 8 a 16:
    if( !(mb_strlen($password) >= 8) or !(mb_strlen($password) <= 16) ){
        array_push($error, "passLength=0");
    }

    foreach($passwordToArray as $letter){
        
        if( !(in_array($letter, str_split($upperCase))) and !($hasUpperCase)){

            if( !(in_array("passUpperCase=0", $error)) ){
                array_push($error, "passUpperCase=0");
            }

        }else {

            $hasUpperCase = true;
            if(in_array("passUpperCase=0", $error)){
                $indexError = array_search("passUpperCase=0", $error);
                unset($error[$indexError]);
            }

        }

        if( !(in_array($letter, str_split($number))) and !($hasNumber)){

            if( !(in_array("passHasNumber=0", $error)) ){
                array_push($error, "passHasNumber=0");
            }

        }else {

            $hasNumber = true;
            if( in_array("passHasNumber=0", $error) ){
                $indexError = array_search("passHasNumber=0", $error);
                unset($error[$indexError]);
            }

        }

    }

    foreach($error as $invalid){
        $erroUrl = $erroUrl . $invalid . "&";
    }

    if( sizeof($error) > 0 ){
        $valid = false;
    }

    if(!($valid)){
        header("location: $erroUrl");
    }else {
        $stmt = $connection->prepare($sqlInsertFuncionario);
        $stmt->bindValue(":nome", $name);
        $stmt->bindValue(":senha", sha1($password));
        $stmt->bindValue(":CPF", $CPF);
        $stmt->execute();

        header("location: ../register.php?sucess=1");
    }
?>