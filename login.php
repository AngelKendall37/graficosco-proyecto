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
            <h1 class="title">¡Bienvenido!</h1>
            <form class="inputs-container" action="./php/validar.php" method="POST">
                <input class="input" type="text" name="correo" placeholder="Correo">
                <input class="input" type="password" name="contraseña" placeholder="Contraseña">
                <button class="btn">Iniciar</button>
                <p>¿Todavia no tienes una cuenta? <a href="registro.php"><span class="span" >Registrate!</span></p></a>
            </form>
            </a>
          </div>
            <img class="image-container" src="./css/1.png" alt="">
      </div>

</body>
</html>