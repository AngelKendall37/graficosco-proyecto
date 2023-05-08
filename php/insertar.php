<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$iduser=$_POST['iduser'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];


$conexion=mysqli_connect("localhost","root","","vende");
$consulta="INSERT INTO usuario(nombre, apellido, iduser, correo, contraseña) VALUES ('$nombre', '$apellido', '$iduser', '$correo', '$contraseña')";
$resultado=mysqli_query($conexion,$consulta);

if ($resultado == 1){

    header("location: ../login.php");
    
} 
else if($resultado == 0){
    echo "No se inserto!";
}
?>