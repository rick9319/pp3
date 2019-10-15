<?php include("seguridad.php"); 
 include("conexion.php");
$link=conecta();
?> 
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
       <title>SES - UEES</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/quill/dist/quill.snow.css">
    <link href="dist/css/style.min.css" rel="stylesheet">
    <script src="assets/plotly-latest.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logoicon.png" alt="homepage" class="light-logo" />
                           
                        </b>
                         <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="assets/images/logotext.png" alt="homepage" class="light-logo" />
                            
                        </span>
                        <!--End Logo icon -->
              
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <li class="nav-item d-none d-md-block"> <a class="nav-link waves-effect waves-dark" href="bienvenido.php"><i class="mdi mdi-arrow-left-bold font-24"></i></a>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                   
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
          
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                             <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Event today</h5> 
                                                        <span class="mail-desc">Just a reminder that event</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Settings</h5> 
                                                        <span class="mail-desc">You can customize this template</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Pavan kumar</h5> 
                                                        <span class="mail-desc">Just see the my admin!</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Luanch Admin</h5> 
                                                        <span class="mail-desc">Just see the my new admin!</span> 
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/agent.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item"><i class="fas fa-user m-r-5 m-l-5"></i> <?php echo $_SESSION["usuarioactual"] ?></a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fas fa-comments m-r-5 m-l-5"></i> Mensajes</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fas fa-info-circle m-r-5 m-l-5"></i> Mi informacion</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="salir.php"><i class="fas fa-power-off m-r-5 m-l-5"></i> Salir</a>
                                <div class="dropdown-divider"></div>
                                                 </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="bienvenido.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Inicio</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="estadisticas.php" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Estadisticas</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Equipos </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a  href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Consultar inventario </span></a></li>
                                <li class="sidebar-item"><a  href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Ingresar </span></a></li>
                            </ul>
                        </li>
                           <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Usuarios </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="consultausuarios.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Consultar </span></a></li>
                                <li class="sidebar-item"><a href="registrouserbasic.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Agregar </span></a></li>
                            </ul>
                        </li>
                          <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-blur-linear"></i></i><span class="hide-menu">Aulas </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a  href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-arrow-down-box"></i><span class="hide-menu"> Listado de aulas </span></a></li>
                                <li class="sidebar-item"><a  href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Asignar </span></a></li>
                                <li class="sidebar-item"><a  href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Verificar asignaciones </span></a></li>                          
                            </ul>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tables.html" aria-expanded="false"><i class="mdi mdi-file-check"></i><span class="hide-menu">Solicitud</span></a></li>
                        </li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Sección de estadistica</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="bienvenido.php">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Estadisticas</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            
                                <div class="card-body">
                                    <h4 class="card-title">Graficos y datos estadisticos</h4>
                                    <div class="form-group row" id="grafica">
                                        <?php  
 $edad1=mysqli_query($link,"SELECT edad from encuesta WHERE edad='18-25'");
$edadre1=mysqli_num_rows($edad1);
 $edad2=mysqli_query($link,"SELECT edad from encuesta WHERE edad='25-30'");
$edadre2=mysqli_num_rows($edad2);
 $edad3=mysqli_query($link,"SELECT edad from encuesta WHERE edad='30-50'");
$edadre3=mysqli_num_rows($edad3);
 $edad4=mysqli_query($link,"SELECT edad from encuesta WHERE edad='50-70'");
$edadre4=mysqli_num_rows($edad4);
 $edad5=mysqli_query($link,"SELECT edad from encuesta WHERE edad='70 o mas'");
$edadre5=mysqli_num_rows($edad5);
?>
                                        <script type="text/javascript">
                                             var ultimateColors = [['rgb(33, 75, 99)', 'rgb(79, 129, 102)', 'rgb(151, 179, 100)', 'rgb(175, 49, 35)', 'rgb(36, 73, 147)']];
                                            var data = [{
  values: [<?php echo $edadre1;?>,<?php echo $edadre2;?>, <?php echo $edadre3;?>,<?php echo $edadre4;?>,<?php echo $edadre5;?>],
  labels: ['18-25', '25-30', '30-50','50-70','70 o mas'],
   marker: {
    colors: ultimateColors[0]
  },
  type: 'pie'
}];

var layout = {
    title: 'Edades de la muestra de encuesta de satisfacción(años)',
  height: 400,
  width: 900
};

Plotly.newPlot('grafica', data, layout);
                                        </script>
                                        </div>
                                        <div class="form-group row" id="grafica2">
                                            <?php  
 $ev1=mysqli_query($link,"SELECT evalsistema from encuesta WHERE evalsistema=1");
$evr1=mysqli_num_rows($ev1);
 $ev2=mysqli_query($link,"SELECT evalsistema from encuesta WHERE evalsistema=2");
$evr2=mysqli_num_rows($ev2);
 $ev3=mysqli_query($link,"SELECT evalsistema from encuesta WHERE evalsistema=3");
$evr3=mysqli_num_rows($ev3);
 $ev4=mysqli_query($link,"SELECT evalsistema from encuesta WHERE evalsistema=4");
$evr4=mysqli_num_rows($ev4);
 $ev5=mysqli_query($link,"SELECT evalsistema from encuesta WHERE evalsistema=5");
$evr5=mysqli_num_rows($ev5);
?>
                                            <script type="text/javascript">

                                                var data = [{
  values: [<?php echo $evr1;?>, <?php echo $evr2;?>, <?php echo $evr3;?>, <?php echo $evr4;?>, <?php echo $evr5;?>],
  labels: ['Muy Malo', 'Malo', 'Regular', 'Bueno', 'Muy Bueno'],
  name: 'Satisfacción',
  hoverinfo: 'label+percent+name',
  hole: .5, 
  type: 'pie'
}];

var layout = {
  title: 'Satisfacción de usuario del sistema',
 height: 400,
  width: 900
};

Plotly.newPlot('grafica2', data, layout);
                                            </script>
                                        </div>
                                        <div class="form-group row" id="grafica3">
                                             <?php  
 $fac1=mysqli_query($link,"SELECT facultad from encuesta WHERE facultad='Sociales'");
$facr1=mysqli_num_rows($fac1);
 $fac2=mysqli_query($link,"SELECT facultad from encuesta WHERE facultad='Ingenieria'");
$facr2=mysqli_num_rows($fac2);
 $fac3=mysqli_query($link,"SELECT facultad from encuesta WHERE facultad='Juridica'");
$facr3=mysqli_num_rows($fac3);
 $fac4=mysqli_query($link,"SELECT facultad from encuesta WHERE facultad='Empresarial'");
$facr4=mysqli_num_rows($fac4);
 $fac5=mysqli_query($link,"SELECT facultad from encuesta WHERE facultad='Medicina'");
$facr5=mysqli_num_rows($fac5);
 $fac6=mysqli_query($link,"SELECT facultad from encuesta WHERE facultad='Mantenimiento'");
$facr6=mysqli_num_rows($fac6);
?>
                                        <script type="text/javascript">
                   var trace1 = {
  x: ['Sociales', 'Ingenieria', 'Juridica', 'Empresarial', 'Medicina', 'Mantenimiento'],
  y: [<?php echo $facr1;?>,<?php echo $facr2;?>,<?php echo $facr3;?>,<?php echo $facr4;?>,<?php echo $facr5;?>,<?php echo $facr6;?>,],
  type: 'bar',
  name: 'Facultad/Area',
  marker: {
    color: 'rgb(72, 50, 125)',
    opacity: 0.7,
  }
};

var data = [trace1];

var layout = {
  title: 'Cantidad de personas encuestadas por facultad/area',
};

Plotly.newPlot('grafica3', data, layout);
                                        </script>
                                        </div>
                                        <div class="form-group row" id="grafica4">  
                                            <?php  
 $si=mysqli_query($link,"SELECT implementacion from encuesta WHERE implementacion='Si'");
$sir=mysqli_num_rows($si);
 $no=mysqli_query($link,"SELECT implementacion from encuesta WHERE implementacion='No'");
$nor=mysqli_num_rows($no);
?>
                                            <script type="text/javascript">
            var trace1 = {
  x: ['Si', 'No'],
  y: [<?php echo $sir;?>, <?php echo $nor;?>],
   marker:{
    color: ['rgb(12, 148, 41)','rgb(138, 7, 24)']
  },
  type: 'bar'
};

var data = [trace1];

var layout = {
  title: '¿Considera necesaria la implementacion de una aplicacion web para el control de inventario y asignacion de equipos?'
};
Plotly.newPlot('grafica4', data, layout);
                                            </script>
                                        </div>
                                    </div>
                                 
                                </div>
                      
                        </div>
                                           
                    </div>
                   
                </div>
                <!-- editor -->

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
    
            <footer class="footer text-center">
                Universidad Evangelica de El Salvador. Todos los derechos reservados 2019.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
   <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="assets/libs/flot/excanvas.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="assets/libs/flot/jquery.flot.time.js"></script>
    <script src="assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="dist/js/pages/chart/chart-page-init.js"></script>
   
</body>

</html>