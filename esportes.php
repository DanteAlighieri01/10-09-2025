<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEJUC/CONECTA JOVEM - Esportes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
        body {
            background-color: #ffffff;
            color: black;
        }

        h2 { 
            font-family: 'Arial Black', sans-serif; 
            margin-left: 20px;
        }

        .two {
            background-color: #4682B4; /* azul escuro */
            color: white;
        }

        .baixo {
            background-color: #00BFFF; /* azul-claro */
            height: 25px;
            width: 100%;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 130px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        li a {
            display: block;
            color: black;
            padding: 8px 16px;
            text-decoration: none;
        }

        li a.active {
            background-color: #00BFFF;
            color: white;
        }

        li a:hover:not(.active) {
            background-color: #00BFFF;
            color: black;
        }

        @media (max-width: 768px) {
            ul {
                position: relative;
                width: 100%;
                height: auto;
            }
        }
    </style> 
</head>

<body>
   <div class="two d-flex align-items-center justify-content-center position-relative py-3">
    <!-- Logo Governo (à esquerda) -->
    <img src="imagens/link_gov.png" alt="Logo Governo" 
         style="position: absolute; left: 30px; top: 30px; width:190px; height:50px;">

    <!-- Imagem centralizada -->
    <img src="imagens/secretaria_juventude.jpg" alt="Secretaria Juventude" 
         style="width:880px; height:200px;">
    <?php
    include 'menu2.php';
    ?>
</div>

    <!-- Faixa azul-claro -->
    <div class="baixo"></div>

    <!-- Menu lateral -->
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="noticias.php">Notícias</a></li>
        <li><a href="eventos.php">Eventos</a></li>
        <li><a class="active" href="esportes.php">Esportes</a></li>
        <li><a href="cursos.php">Cursos</a></li>
        <li><a href="sugestoes.php">Sugestões</a></li>
    </ul>

    <!-- Conteúdo principal -->
    <div class="container" style="margin-left:130px; padding:20px;">
        <h2>Secretaria da Juventude e Cidadania</h2>
        <h3>O que nós somos e nossos valores</h3>

        <p>
            A Secretaria da Juventude e Cidadania oferece diversas modalidades esportivas para jovens de todas as idades. 
            O objetivo é incentivar hábitos saudáveis, a integração social e o desenvolvimento pessoal por meio do esporte.
        </p>

        <p>
            As atividades são gratuitas e promovem valores como respeito, trabalho em equipe e superação. 
            Além das práticas regulares, a SEJUC realiza torneios e eventos esportivos que aproximam os jovens da comunidade.
        </p>

        <p>
            O esporte é mais do que lazer — é cidadania, inclusão e oportunidade!
        </p>
    </div>
</body>
</html>
