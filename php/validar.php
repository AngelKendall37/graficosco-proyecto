<?php
    include ("db.php");
    
    $correo=$_POST['correo'];
    $contraseña=$_POST['contraseña'];

    $resultado = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo = '$correo' AND contraseña = '$contraseña' ");
    $fila = mysqli_num_rows($resultado);

    if ($fila > 0){
        session_start();
        $_SESSION['cliente'] = $correo;
        header("location: ../index.php");
    }else{
        echo '
        <script>
        alert("El correo o la contraseña son incorrectos");
        location.href="../login.php"
        </script>
        ';
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>


