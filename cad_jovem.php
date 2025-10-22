<?php
include 'conecta.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura dos dados do formulário
    $nome     = $_POST['nome'] ?? '';
    $idade    = $_POST['idade'] ?? '';
    $genero   = $_POST['genero'] ?? '';
    $mail    = $_POST['mail'] ?? '';
    $celular = $_POST['celular'] ?? '';
    $cep      = $_POST['cep'] ?? '';
    // Verifica se o nome e o CPF foram preenchidos
    if (empty($nome) || empty($mail)) {
        echo "<script>alert('Preencha todos os campos obrigatórios!'); history.back();</script>";
        exit();
    }

    // Verifica se já existe registro
    $check = $conn->prepare("SELECT * FROM cadastro WHERE nome = ? AND mail = ?");
    $check->bind_param("ss", $nome, $mail);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        echo "<script>
            alert('O jovem já existe em nossa base de dados!');
            window.location.href='index.php';
        </script>";
        exit();
    }

    // Insere novo registro
    $sql = $conn->prepare("INSERT INTO cadastro 
        (nome, idade, genero, mail, celular, cep)
        VALUES (?, ?, ?, ?, ?, ?)");

    $sql->bind_param("sissss", 
        $nome, $idade, $genero, $mail, $celular, $cep
    );

    if ($sql->execute()) {
        echo "<script>
            alert('Cadastro realizado com sucesso!');
            window.location.href='questionario.php';
        </script>";
    } else {
        echo "<script>
            alert('Não foi possível cadastrar o jovem!');
            window.location.href='index.php';
        </script>";
    }

    $conn->close();
} else {
    // Se o arquivo for acessado diretamente sem POST
    echo "<script>alert('Acesso inválido. Por favor, use o formulário.'); window.location.href='index.php';</script>";
}
?>
