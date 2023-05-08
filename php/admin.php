<?php

    session_start();

    if(!isset($_SESSION['cliente'])){
        header('location: login.php');
    
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIENVENIDO</title>
</head>
<body>
    <H1>ADMINISTRADOR</H1>
    <?php

echo "<a href='salir.php'>SALIR</a>";

?>
</body>
</html>