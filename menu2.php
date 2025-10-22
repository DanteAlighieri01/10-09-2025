<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">
    <style>
    h2 { font-family: Arial Black, sans-serif;}    
    </style>
    <body>
        <div class="position-absolute top-0 end-0 p-3">
            <a href="cadastro.php" style="color:white; text-decoration:none; font-weight:bold;">CADASTRO</a>
            <b><span style="color:gray;">|</span></b>
            <a href="login.php" style="color:white; text-decoration:none; font-weight:bold;">LOGIN</a>
        </div>
    </body>
</html>