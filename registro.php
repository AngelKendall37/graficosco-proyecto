<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./php/style.css">
    
    <title>Login</title>
</head>
<body>
      <div class="login-container">
          <div class="login-info-container">
            <h1 class="title">¡Que esperas, crea una cuenta!</h1>
            <form class="inputs-container" action="./php/insertar.php" method="post">
                <input class="input" type="text" name="nombre" placeholder="Nombre">
                <input class="input" type="text" name="apellido" placeholder="Apellido">
                <input class="input" type="number" name="iduser" placeholder="Numero de C.C">
                <input class="input" type="text" name="correo" placeholder="Correo">
                <input class="input" type="password" name="contraseña" placeholder="Contraseña">
                <button class="btn">Enviar</button>
                <p>¿Ya tienes una cuenta? <a href="login.php"><span class="span" >Ingresa!</span></p></a>
            </form>
          </div>
            <img class="image-container" src="./css/2.png" alt="">
      </div>

</body>
</html>