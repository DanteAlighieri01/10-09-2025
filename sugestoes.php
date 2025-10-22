<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>SEJUC/CONECTA JOVEM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <style>
        body {
            background-color: #ffffff;
            color: black;
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

        h2, h3, p {
            color: black;
        }

        .two {
            background-color: #4682B4;
            color: white;
        }

        .baixo {
            background-color: #00BFFF;
            height: 25px;
            width: 100%;
        }

        @media (max-width: 768px) {
            ul {
                position: relative;
                width: 100%;
                height: auto;
            }
        }
        .sugestões{
            color:black
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
    <div class="baixo"></div>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="noticias.php">Notícias</a></li>
        <li><a href="eventos.php">Eventos</a></li>
        <li><a href="esportes.php">Esportes</a></li>
        <li><a href="cursos.php">Cursos</a></li>
        <li><a class="active" href="sugestoes.php">Sugestões</a></li>
    </ul>
            <div style="margin-left:130px;padding:1px 16px;height:1000px;">
                <h2>Secretaria da juventude e cidadania</h2>
                <h3>Sugestões</h3>
                <p>Nós, da Secretaria da Juventude e Cidadania (SEJUC), acreditamos que ouvir os jovens é essencial para <p>
                <p>construir políticas públicas mais justas, eficientes e participativas. Prezamos por um atendimento de<p>
                <p>qualidade, com respeito, empatia e compromisso com o bem-estar de todos.<p>
                <p>estamos sempre abertos a sugestões, ideias e opiniões que possam contribuir para melhorar nossos<p>
                <p>projetos, eventos e serviços. Acreditamos que cada jovem tem muito a acrescentar, e é com a colaboração<p>
                <p>de todos que conseguimos evoluir e atender melhor às reais necessidades da juventude.<p>
                <br>
                <p>Participe, compartilhe suas ideias e ajude a construir uma SEJUC cada vez mais próxima dos jovens e<p>
                <p>conectada com o futuro!<p>              
                <div>   
                <input type="text" placeholder="Ex: Eu gostaria que fosse disponibilizados..." 
                style="width: 900px; height: 100px;">
                </div>      
    </div>
    </div>    
    </div>
    <br>
</body>
</html>