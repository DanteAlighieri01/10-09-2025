<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>SEJUC / CONECTA JOVEM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .verde {
      background-color: #4682B4;
      color: white;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .verde img {
      height: 60px;
      object-fit: contain;
    }

    .card {
      max-width: 600px;        /* limita a largura */
      margin: 30px auto;       /* centraliza */
      border-radius: 12px;     /* cantos arredondados */
    }

    form {
      padding: 20px 30px;      /* menos espaçamento interno */
    }

    .form-label {
      font-weight: 600;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 8px 20px;
      border: none;
      border-radius: 25px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <div class="verde">
    <img src="imagens/link_gov.png" alt="Logo Governo">
    <img src="imagens/brasao_mga.png" alt="Brasão">
  </div>

  <div class="card shadow">
    <div class="card-header text-center bg-light">
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#00008B" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
      </svg>
      <b> CADASTRO </b>
    </div>
    <form action="cad_jovem.php" method="POST">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome completo</label>
        <input type="text" name="nome" id="nome" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">E-mail para contato</label>
        <input type="email" name="mail" id="mail" class="form-control">
      </div>

      <div class="mb-3">
        <label for="celular" class="form-label">Celular (com DDD)</label>
        <input type="text" name="celular" id="celular" class="form-control">
      </div>

      <div class="mb-3">
        <label for="cep" class="form-label">CEP</label>
        <input type="text" name="cep" id="cep" class="form-control">
      </div>
      <div class="mb-3">
        <label for="situacao" class="form-label">Gênero</label>
        <select name="genero" id="genero" class="form-select" required>
          <option value="">Selecione</option>
          <option value="estudando">Masculino</option>
          <option value="trabalhando">Feminino</option>
          <option value="ambos">Outro</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="interesse" class="form-label">Idade</label>
        <select name="idade" id="idade" class="form-select" required>
          <option value="">Selecione</option>
          <option value="18 a 29">Entre 18 á 29 anos</option>
          <option value="12 a 18">Entre 12 á 18 anos</option>
          <option value="0 a 12">Entre 0 á 12 anos</option>
        </select>
      </div>
      <div class="text-center mt-3">
        <button type="submit">CADASTRAR</button>
      </div>
    </form>
  </div>
</body>
</html>
