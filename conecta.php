<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "desenvolvimento";
    //habilita os relatorios de erro de classe mysql
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try {
        $conn = new mysqli($hostname, $username, $password, $database);
        //define o charset para UTF-8
        $conn -> set_charset("utf8mb4");
    } catch (mysqli_sql_exception $e) {
        error_log("Error na conexãocom o BD: ". $e -> getMessage());
        //mensagem para o user;
        die("Ocorreu um erro");
    }
?>