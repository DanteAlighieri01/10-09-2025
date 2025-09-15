<?php
    session_start();
    if (!isset($_SESSION["user"])) {
        echo "<script language='javascript' type='text/javascript'>
        window.location.hrf='inde.php';
        </script>";
        exit;
    }
?>
<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-language" content="pt-br">
        <title>SALGADOS DA MAMÃE</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <style>
            title  {text-align: center;}
            h2  {text-align: center;}
            .main-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 15px 10px;
            }
            .user-info {
                display: flex;
                align-items: center;
                gap: 8px;
                color: gray;
            }
            .usernamefront {
                font_weight: bold;
            }
            .logout-link {
                color: red;
                font-weight: bold;
                text-decoration: none;
            }
            .logout-link:hover{
                text-decoration: underline;
            }
                body {
                    padding: 10px;
                    margin: 5px;
                }
        </style>
    </head>
    <body>
        <header class="main-header">
            <h2>SALGADOS DA MAMÃE</h2>
            <div class="user-info"> 
                <?php
                if (!empty($_SESSION["user"])) {
                    $usuario = $_SESSION["user"];
                    echo "<span class='username'>".htmlspecialchars($usuario)." | </span><a class='logout-link' href='sair.php'>SAIR</a>";
                }
                ?>
            </div>
            </header>
            <hr>
        <nav>
            <?php
            include 'menu.php';
            ?>
        </nav>
        <br>
        <h2>DASHBORD</h2>
    </body>
</html>