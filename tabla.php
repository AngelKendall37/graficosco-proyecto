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

    
    <!-- css tables-->
    <link rel="stylesheet" href="text/css" href="vendor/datatables/datatables.min.css">
    <link rel="stylesheet" href="text/css" href="vendor/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
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
    <?php
        include_once './bd/conexion.php';
        $objeto = new Conexion();
        $conexion = $objeto->Conectar();

        $consulta = "SELECT DEPARTAMENTO, MUNICIPIO, NIVEL_EDUCATIVO, SECTOR_SOCIOECONOMICO, TIPO_PARTICIPANTE FROM info_vende";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
    ?>

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

                    <!-- Content Row -->
                    <div class="row">

                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <h1 class="h3 mb-2 text-gray-800">DATOS</h1>
                            
        
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                            <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>DEPARTAMENTO</th>
                                <th>MUNICIPIO</th>
                                <th>NIVEL_EDUCATIVO</th>                                
                                <th>SECTOR_SOCIOECONOMICO</th>  
                                <th>TIPO_PARTICIPANTE</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['DEPARTAMENTO'] ?></td>
                                <td><?php echo $dat['MUNICIPIO'] ?></td>
                                <td><?php echo $dat['NIVEL_EDUCATIVO'] ?></td>
                                <td><?php echo $dat['SECTOR_SOCIOECONOMICO'] ?></td>   
                                <td><?php echo $dat['TIPO_PARTICIPANTE'] ?></td> 
                                  
                                
                            </tr>
                            <?php
                                }
                            ?>                                
                        </tbody>        
                       </table>                    
                    </div>
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
                    <a class="btn btn-primary" href="login.php">Cerrar sesion</a>
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

     <script type="text/javascript" src="vendor/datatables/datatables.min.js"></script>
     <script type="text/javascript" src="main.js"></script>

 


</body>

</html>


  