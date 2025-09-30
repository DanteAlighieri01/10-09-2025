<?php
    session_start();
    include 'conecta.php';
    if (!isset($_SESSION["user"])) {
        echo "<script language='javascript' type='text/javascript'>
        window.location.href='index.php';
        </script>";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-language" content="pt-br">
        <title>SALGADOS DA MAMÃE</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <style>
            body {
                padding: 5px;
                margin: 5px;
            }
            h2 {
                color: gray;
            }
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
            .username {
                font-weight: bold;
            }
            .logout-link {
                color: red;
                font-weight: bold;
                text-decoration: none;
            }
            .logout-link:hover {
                text-decoration: underline;
            }
            .conteiner-pai {
                display: flex;
                justify-content: center; 
                align-items: flex-start;
                gap: 50px; 
                }
            .conteiner-filho {
                display: center;
                justify-content: center; 
                align-items: flex-start; 
            }  
            .graf {
                 display: flex;
                justify-content: center;
                align-items: flex-start;
                gap: 50px; 
            }
        </style>
    </head>
    <body>
        <header class="main-header">
            <h2>SALGADINHOS DA MAMÃE</h2>
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
        <center><h2><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
            </svg>&nbsp;DASHBOARD</h2></center>
        <br>
        <div class="conteiner-pai">
            <div class="conteiner-filho row justify-content row-cols-3 row-cols-md-1 mb-2 text-center">                                    
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sw">
                        <div  class="card-header py-3">
                            <h2>TOTAL DE CLIENTES</h2>
                </div>
                                <table class="table table-hover">
                                    <tr>
                                        <?php
                                            $pesquisa1 = mysqli_query($conn, "SELECT COUNT(id) as numcli FROM `clientes`;");
                                                $row = mysqli_num_rows($pesquisa1);
                                                if ($row > 0) {
                                                while ($registro = $pesquisa1 -> fetch_array()) {
                                                $numcli = $registro ['numcli'];
                                                echo ($numcli);
                                                    }
                                                }
                                        ?>
                                    </tr>
                                </table>
                        </div>
                </div>
            </div>
            <div class="conteiner-filho row justify-content row-cols-3 row-cols-md-1 mb-2 text-center">                                    
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sw">
                        <div  class="card-header py-3">
                        <h2>TOTAL DE SALGADOS</h2>
                    </div>
                            <table class="table table-hover">
                                <tr>
					                <?php
                                        $pesquisa2 = mysqli_query($conn, "SELECT COUNT(id) as numsal FROM `salgados`;");
                                            $row = mysqli_num_rows($pesquisa2);
                                            if ($row > 0) {
                                            while ($registro = $pesquisa2 -> fetch_array()) {
                                            $numsal = $registro ['numsal'];
                                            echo ($numsal);
                                                }
                                            }
					                ?>
                                </tr>
                            </table>
                    </div>
                </div>
            </div>
            <div class="conteiner-filho row justify-content row-cols-3 row-cols-md-1 mb-2 text-center">                                    
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sw">
                        <div  class="card-header py-3">
                        <h2>TOTAL DE PEDIDOS</h2>
                    </div>
                            <table class="table table-hover">
                                <tr>
					                <?php
     					                $pesquisa3 = mysqli_query($conn, "SELECT COUNT(id) as numped FROM `pedidos`;");
                                            $row = mysqli_num_rows($pesquisa3);
                                            if ($row > 0) {
                                            while ($registro = $pesquisa3 -> fetch_array()) {
                                            $numped = $registro ['numped'];
                                            echo ("Total de Pedidos".$numped);
                                                }
                                            }
                                            ?>
                                            <br>
                                            <?php
                                            $pesquisa4 = mysqli_query($conn, "SELECT SUM(total) AS numtotal FROM pedidos;");
                                            $row = mysqli_num_rows($pesquisa4);
                                            if ($row > 0) {
                                            while ($registro = $pesquisa4 -> fetch_array()) {
                                            $numtotal = $registro ['numtotal'];
                                            echo ("Valor em pedidos R$".$numtotal);
                                                }
                                            }
                                    ?>
                                </tr>
                            </table>
                        </div>
                </div>
            </div>
        </div>
        <div class="graf row-cols-md-3 text-center">
            <div class="col">
                <div class="card mb- rounded-5  shadow-sw">
                    <div class="card-header py-3">
                        <h2>PEDIDOS POR CLIENTES</h2>
                    </div>
                    <div class="card-body text-center">
                        <?php
                            include 'grafpedcli.php';
                        ?>
                    </div>
                </div>       
            </div>
        </div>		                                                           
    </body>
</html>