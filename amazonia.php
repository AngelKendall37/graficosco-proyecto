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
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">GRAFICAS DE LA AMAZONIA</h1>

    
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                         <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="h5 font-weight-bold text-primary text-uppercase mb-1">
                                            PARTICIPANTES</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">3584</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="h5 font-weight-bold text-success text-uppercase mb-1">
                                            DEPARTAMENTOS</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">32</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-file fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="h5 font-weight-bold text-info text-uppercase mb-1">MUNICIPIO/CIUDADES
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">353</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        
                    </div>
                
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                            <!-- DEPARTAMENTOS Chart -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">DEPARTAMENTOS DE LA AMAZONIA COLOMBIANA</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                        <h4 class="small font-weight-bold">CAQUETA <span
                                                class="float-right">13</span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar" role="progressbar" style="width: 16%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">PUTUMAYO<span
                                                class="float-right">11</span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 13%"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">GUAVIARE <span
                                            class="float-right">2</span></h4>
                                        <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 2%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">GUAINIA <span
                                                class="float-right">1</span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 1%"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- textoooooooooo -->

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Crecimiento del E-commerce por departamentos</h6>
                                </div>
                                <div class="card-body">
                                    La presente gráfica ilustra los departamentos con mayor participación en los E-commerce.
                                </div>
                            </div>

                            
                            <!-- SECTPR VENTAS Chart -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                        <h6 class="m-0 font-weight-bold text-primary">SECTORES COMERCIALES</h6>
                                    </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <canvas id="circleChart" style="min-height: 300px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        
                          <!-- textoooooooooo -->

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Sectores comerciales con mayor concurrencia</h6>
                                </div>
                                <div class="card-body">
                                    Sectores de actividad economica virtual con mayor concurrencias.
                                </div>
                            </div>

                        </div>
                        
                          <!-- Content Column -->
                          <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                        <h6 class="m-0 font-weight-bold text-primary">CIUDADES LA AMAZONIA COLOMBIANA</h6>
                                    </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <canvas id="barChart" style="min-height: 300px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        
                          <!-- textoooooooooo -->

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Ciudades con mayor presencia E-commerce</h6>
                                </div>
                                <div class="card-body">
                                    Ciudades con mayor aceptaciones y participacion de E-commerce.
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">PARTICIPANTES</h6>
                                </a>
                                <!-- Card Body -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <canvas id="emChart" style="min-height: 300px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header py-3">
                            </div>
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tipos de participantes</h6>
                                </div>
                                <div class="card-body">
                                    Participantes con mayor concurrencia en los E-commerce.
                                </div>
                            </div>

                            
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">NIVEL EDUCATIVO</h6>
                                </a>
                                <!-- Card Body -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <canvas id="amChart" style="min-height: 300px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header py-3">
                            </div>
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Nivel de formacion academica de los participantes</h6>
                                </div>
                                <div class="card-body">
                                    Participantes con mayor concurrencia en los E-commerce.
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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

<div class="chartCard">
    <div class="chartBox">
      <canvas id="myChart"></canvas>
    </div>
  </div>
  <script src="path/to/chartjs/dist/chart.umd.js"></script>
  

  <script>
  // setup 
  const data = {
    labels: ['CALI','PALMIRA','POPAYAN','IPIALES','CARTAGO','QUIBDO','LA UNION','TULUA','GUADALAJARA DE BUGA','ROLDANILLO','YUMBO','FLORIDA','BUENAVENTURA','PRADERA','BELEN','IPIALES','PUERTO TEJADA','EL CERRITO'],
    datasets: [{
      label: 'Datos, Departamentos',
      data: [247, 76, 67, 47, 28, 13, 13, 11, 10, 9, 8, 7, 6, 6, 5, 5, 4, 4, 4],
      backgroundColor: [
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',        
      ],
    }]
  };

  // config 
  const config = {
    type: 'bar',
    data,
    options: {
      scales: {
        y: {
          beginAtZero: false
        }
      }
    }
  };

  // render init block
  const myChart = new Chart(
    document.getElementById('areaChart'),
    config
  );
  
  </script>

<script>
    // SECTORES COMERCIALES
    const datacircle = {
      labels: ['BELLEZA','MODA','INDUSTRIAS CREATIVAS','TECNOLOGIA','HOGAR','COMESTIBLES(ALIMENTOS Y BEBIDAS)','SALUD-FARMACIA','ELECTRODOMESTICOS'],
      datasets: [{
        label: 'Datos, Sector ventas',
        data: [4, 3, 3, 2, 2, 1, 1, 1],
        backgroundColor: [
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
        ],
      }]
    };

    // config 
    const configcircle = {
      type: 'bar',
      data: datacircle,
      options: {}
    };

    // render init block
    const circleChart = new Chart(
      document.getElementById('circleChart'),
      configcircle
    );
    </script>

<script>
    // CIUDADES 
    const databar = {
      labels: ['FLORENCIA','SAN JOSE DEL GUAVIARE','MOCOA','VALLE DEL GUAMUEZ','PUERTO ASIS','VILLAGARZON','INIRIDA','ALBANIA','CASTAGENA DEL CHAIRA','SAN VICENTE DEL CAGUAN'],
      datasets: [{
        label: 'Datos, Ciudades',
        data: [9, 5, 2, 2, 1, 1, 1, 1, 1, 1],
        backgroundColor: [
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(54, 162, 235, 1)',
        ],
      }]
    };

    // config 
    const configbar = {
      type: 'bar',
      data: databar,
      options: {}
    };

    // render init block
    const barChart = new Chart(
      document.getElementById('barChart'),
      configbar
    );
    </script>

<script>
    // setup 
    const dataem = {
      labels: ['EMPRENDEDOR','COMERCIANTE','EMPRESARIO'],
      datasets: [{
        label: 'Datos, Participantes',
        data: [21, 4, 2],
        backgroundColor: [
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(54, 162, 235, 1)',
        ],
      }]
    };

    // config 
    const configem = {
      type: 'doughnut',
      data: dataem,
      options: {}
    };

    // render init block
    const emChart = new Chart(
      document.getElementById('emChart'),
      configem
    );
</script>

<script>
    // setup 
    const dataam = {
      labels: ['SUPERIOR PREGRADO','MEDIA','SUPERIO POSGRADO','BASICA',],
      datasets: [{
        label: 'Datos, Nivel educativo',
        data: [11, 8, 5, 2],
        backgroundColor: [
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 206, 86, 1)',
        ],
      }]
    };

    // config 
    const configam = {
      type: 'line',
      data: dataam,
      options: {}
    };

    // render init block
    const amChart = new Chart(
      document.getElementById('amChart'),
      configam
    );
</script>


      <script>
        function CargarContenido(contenedor,contenido){
            $("."+contenedor).load(contenido);
        }
    </script>