<?php

    session_start();
    $correo = $_SESSION['cliente'];

    if(!isset($_SESSION['cliente'])){
        header('location: login.php');
    
    }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GRAFICOS CO</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon n-15">
                    <i class="fas fa-chart-pie"></i>
                </div>
                <div class="sidebar-brand-text mx-3">GRAFICOS CO</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>INICIO</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
            
            </div>

            <!-- Graficas -->
            <li class="nav-item">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>GRAFICAS</span></a>
            </li>

            <hr class="sidebar-divider">

            <!-- Graficas -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>REGIONES</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">GRAFICAS POR REGIONES:</h6>
                        <a class="collapse-item  " href="caribe.php">CARIBE</a>
                        <a class="collapse-item" href="pacifico.php">PACIFICO</a>
                        <a class="collapse-item" href="orinoquia.php">ORINOQUIA</a>
                        <a class="collapse-item" href="amazonia.php">AMAZONIA</a>
                        <a class="collapse-item" href="andina.php">ZONA ANDINA</a>
                        <a class="collapse-item" href="insular.php">ZONA INSULAR</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="recomendacion.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>RECOMENDACION</span></a>
            </li>

            <hr class="sidebar-divider">


            <!-- Tablas -->
            <li class="nav-item">
                <a class="nav-link" href="tabla.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>DATOS</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $correo; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_posting_photo.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="row">
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">RECOMENDACION</h1>

                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                            <div class="col-lg-12">
                            <style>
    .centrar {
      text-align: center;
    }
    	form {
			margin: 20px;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}
		input[type=text], select {
			padding: 5px;
			border-radius: 3px;
			border: 1px solid #ccc;
			margin-bottom: 10px;
		}
		input[type=submit] {
			padding: 5px 10px;
			border-radius: 3px;
			border: 1px solid #ccc;
			background-color: #eee;
			cursor: pointer;
        }
        table {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
        }

        th, td {
        text-align: left;
        padding: 8px;
        }

        th {
        background-color: #007bff;
        color: #fff;
        }

        tr:nth-child(even) {
        background-color: #ffffff;
        }

        tr:hover {
        background-color: #dddd;
        }

        .recomendable {
        color: green;
        font-weight: bold;
        }

        .no-recomendable {
        color: red;
        font-weight: bold;
        }
        .progress-bar.border {
        border: 100px solid #000;
        }

  </style>
  <script>
    function limpiarTabla() {
        document.getElementById("tabla-resultados").innerHTML = "";
        document.getElementById("tabla-productos").innerHTML = "";
    }

    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault(); // prevenir que se envíe el formulario automáticamente
        var progressBar = document.querySelector('progress');
        var percent = 0;
        var interval = setInterval(function() {
            percent += 10;
            progressBar.value = percent;
            if (percent >= 100) {
                clearInterval(interval);
                document.querySelector('form').submit(); // enviar el formulario
            }
        }, 500);
    });
</script>

</head>
<body>
  <div class="centrar">
<h3>Ingresa los datos</h3>
  <form method="post">
    <label for="MUNICIPIO">Ciudad:</label>
    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" name="MUNICIPIO" id="MUNICIPIO"><br><br>
    <label for="SECTOR_SOCIOECONOMICO">Sector Comercial:</label>
    <select name="SECTOR_SOCIOECONOMICO" id="SECTOR_SOCIOECONOMICO">
    <option value="">--</option>
    <option value="MODA">MODA</option>
    <option value="COMESTIBLES (ALIMENTOS Y BEBIDAS)">ALIMENTOS Y BEBIDAS</option>
    <option value="INDUSTRIAS CREATIVAS">INDUSTRIAS CREATIVAS</option>
    <option value="TECNOLOGIA">TECNOLOGIA</option>
    <option value="HOGAR">HOGAR</option>
    <option value="BELLEZA">BELLEZA</option>
    <option value="SALUD - FARMACIAS">SALUD Y FARMACIAS</option>
    <option value="COMERCIO AL POR MENOR">COMERCIO AL POR MENOR</option>
    <option value="PRODUCCION, PROCESAMIENTO DE ALIMENTO">PRODUCCION DE ALIMENTO</option>
    <option value="TURISMO">TURISMO</option>
    <option value="DEPORTES">DEPORTES</option>
    <option value="INDUSTRIA / MANOFACTURA">INDUSTRIA Y MANOFACTURA</option>
    <option value="SERVICIOS PERSONALES / EMPRESARIALES">SERVICIOS, PERSONALES Y EMPRESARIALES</option>
    <option value="PRODUCTOS VETERINARIOS">PRODUCTOS VETERINARIOS</option>
    <option value="ELECTRODOMESTICOS">ELECTRODOMESTICOS</option>
    <option value="SERVICIOS INFORMATICOS">SERVICIOS INFORMATICOS</option>
    <option value="COMERCIO AL POR MAYOR">COMERCIO AL POR MAYOR</option>
    <option value="SERVICIOS DE DISEÑO">SERVICIOS DE DISEÑO</option>
    <option value="EDUCACION">EDUCACION</option>
    <option value="PUBLICIDAD">PUBLICIDAD</option>
    <option value="CONSTRUCCION">CONSTRUCCION</option>
    <option value="MANTENIMIENTO">MANTENIMIENTO</option>
    <option value="FINANCIERO">FINANCIERO</option>
    <option value="ACTIVIDADES JURIDICAS">ACTIVIDADES JURIDICAS</option>
    <option value="CIENCIA">CIENCIA</option>
    <option value="ACTIVIDADES VETERINARIAS">ACTIVIDADES VETERINARIAS</option>
    <option value="CRIA DE ANIMALES">CRIA DE ANIMALES</option>
    <option value="SERVICIOS BOTANICOS">SERVICIOS BOTANICOS</option>
    <option value="RECOLECCION">RECOLECCION</option>
    <option value="TRANSPORTE">TRANSPORTE</option>
    <option value="SEGUROS GENERALES">SEGUROS GENERALES</option>
    <option value="BEBIDAS ALCOHOLICAS">BEBIDAS ALCOHOLICAS</option>
    <option value="ALMACENAMIENTO Y DEPOSITO">ALMACENAMIENTO Y DEPOSITO</option>
    <option value="MAQUINARIA">MAQUINARIA</option>
    <!-- Agrega más opciones aquí -->
    </select><br><br>
    <button class="btn btn-primary" aria-haspopup="true"
    aria-expanded="false" type="submit">Buscar</button>
    </form>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "vende";
  
 
  $conn = new mysqli("localhost","root","","vende");
  
  
  if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
  }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $MUNICIPIO = mysqli_real_escape_string($conn, $_POST["MUNICIPIO"]);
      $SECTOR_SOCIOECONOMICO = mysqli_real_escape_string($conn, $_POST["SECTOR_SOCIOECONOMICO"]);

      // Cuenta las ocurrencias del SECTOR en la ciudad especificada
      $sql = "SELECT COUNT(*) AS count FROM info_vende WHERE MUNICIPIO='$MUNICIPIO' AND SECTOR_SOCIOECONOMICO='$SECTOR_SOCIOECONOMICO'";
      $result = $conn->query($sql);

      if ($result === false) {
        die("Error en la consulta: " . $conn->error);
      }

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $count = $row["count"];
        }
      } else {
        $count = 0;
      }

      if ($count == 0) {
        $porcentaje = 100;
      } else {
        $porcentaje = 100 - ($count - 1) * 5;
        if ($porcentaje < 0) {
          $porcentaje = 0;
        }
      }
      // Calcular el porcentaje
    if ($count == 0) {
        $porcentaje = 100;
    } else {
        $porcentaje = 100 - ($count - 1) * 5;
        if ($porcentaje < 0) {
        $porcentaje = 0;
        }
    }
    // Consulta SQL para obtener los productos que coinciden con el sector socioeconómico seleccionado
        $sql2 = "SELECT * FROM productos WHERE SECTOR_SOCIOECONOMICO='$SECTOR_SOCIOECONOMICO'";
        //Ejecutar la consulta y almacenar el resultado en una variable
        $result2 = $conn->query($sql2);

        // Verificar si la consulta tuvo éxito
        if ($result2 === false) {
        echo "Error al ejecutar la consulta: " . $conn->error;
        exit();
        }

        // Obtener el número de filas en el resultado de la consulta
        // Obtener el número de filas en el resultado de la consulta
        $num_rows2 = $result2->num_rows;

        // Cerrar la conexión a la base de datos
        $conn->close();;
    
        // Mostrar el resultado en una tabla HTML
    echo "<h3>Resultado</h3>";
    echo "<table id='tabla-resultados'>";
    echo "<tr><th>CIUDAD</th><th>SECTOR COMERCIAL</th><th>N Tiendas</th><th>Recomendacion</th></tr>";
    echo "<tr><td>$MUNICIPIO</td><td>$SECTOR_SOCIOECONOMICO</td><td>$count</td><td>";
    if ($count == 0) {
        echo "<div class='progress' style='border: 2px solid #000080'><div class='progress-bar bg-success' role='progressbar' style='width:100%'> 100%</div></div>";
    } else if ($count >= 20) {
        echo "<div class='progress' style='border: 2px solid #000080'><div class='progress-bar bg-danger' role='progressbar' style='width:5%' align-items: left>0%</div></div>";
    } else {
        echo "<div class='progress' style='border: 2px solid #000080'><div class='progress-bar bg-success' role='progressbar' style='width:$porcentaje%'> $porcentaje%</div></div>";
    }
      
      echo "</td></tr>";
      echo "</table>";
    
    // Mostrar los productos que coinciden con el sector socioeconómico en una segunda tabla HTML
    echo "<h3>Productos mas vendidos en Colombia</h3>";
    echo "<table id='tabla-productos'>";
    echo "<tr><th>SECTOR COMERCIAL</th><th>NOMBRE</th><th>PORCENTAJE DE VENTAS</th></tr>";
    if ($result2 !== null && $result2->num_rows > 0) {
    while($row2 = $result2->fetch_assoc()) {
        $porcentaje = $row2["cantidad_vendida"] * 10; // Multiplicar por 10 para obtener el porcentaje
        echo "<tr><td>" . $row2["SECTOR_SOCIOECONOMICO"] . "</td><td>" . $row2["nombre"] . "</td><td>";
        echo "<div class='progress' style='border: 2px solid #000080'><div class='progress-bar bg-success' role='progressbar' style='width:$porcentaje%'>$porcentaje%</div></div>";
        echo "</td></tr>";
    }
    } else {
        
    echo "<tr><td colspan='2'>No se encontraron productos que coincidan con el sector socioeconómico seleccionado.</td></tr>";
    }
    echo "</table>";
}
  ?>
  <button class="btn btn-primary" type="button" onclick="limpiarTabla()">Limpiar</button>
  </div>
    
                </div>
        </div>  
    </div>
    </div>
    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <div class="col-lg-6 mb-4">
            <div class="card mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Recomendable</h6>
                                </div>
                                <div class="card-body">
                                Se refiere a que puede crear una empresa de ese sector comercial en la ciudad.
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">No recomendable </h6>
                                </div>
                                <div class="card-body">
                                    Se refiere a que no es recomendable crear una empresa de ese sector comercial en la ciudad.
                                </div>
                            </div>
            </div>

            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Trabajo de grado Universidad de Cordoba Colombia 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesion" a continuación si está listo para finalizar su sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="./php/salir.php">Cerrar sesion</a>
                </div>
            </div>
        </div>
    </div>

   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!-- Core plugin JavaScript-->
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

   <!-- Custom scripts for all pages-->
   <script src="js/sb-admin-2.min.js"></script>

   <!-- Page level plugins -->
   <script src="vendor/chart.js/Chart.min.js"></script>

   <!-- Page level custom scripts -->
  

</body>

</html>
