<?php
session_start();
include 'conecta.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura dos dados do formulário
    $cursos = $_POST['cursos'] ?? '';
    $interesse = $_POST['interesse'] ?? '';
    $horarios = $_POST['horarios'] ?? '';
    $esportes = $_POST['esportes'] ?? '';
    $espaco = $_POST['espaco_esportivo'] ?? '';
    $conteudo = $_POST['conteudo'] ?? '';
    $musica = $_POST['musica'] ?? '';
    $conhece = $_POST['conhece'] ?? '';
    $informar = $_POST['informar'] ?? '';
    if (is_array($esportes)) {
        $esportes = implode(', ', $esportes); // transforma array em string
    }
        if (is_array($musica)) {
            $musica = implode(', ', $musica); // transforma array em string
        }
    if (is_array($cursos)) {
        $cursos = implode(', ', $cursos); // transforma array em string
    }
    // Campos obrigatorios
    if (empty($informar) || empty($interesse)) {
        echo "<script>alert('Preencha todos os campos obrigatórios.'); window.location.href='index.php';</script>";
        exit;
    }
    // Insere novo registro
    $sql = $conn->prepare("INSERT INTO questionario
        (cursos,interesse,horarios,esportes,espaco_esportivo,conteudo,musica,conhece,informar)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?,?)");
       
    $sql->bind_param("sssssssss", 
    $cursos,$interesse,$horarios,$esportes,$espaco,$conteudo,$musica,$conhece,$informar
    );
    if ($sql->execute()) {
        echo "<script>
            alert('Questionario realizado com sucesso!');
            window.location.href='index.php';
        </script>";
    } else {
        echo "<script>
            alert('Não foi possível realizar o questionario!');
            window.location.href='index.php';
        </script>";
    }
 } $conn->close();
?>
