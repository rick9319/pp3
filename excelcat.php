<?php include("seguridad.php"); 
include("conexion.php");
$link=conecta();
$idusuario=$_SESSION["id"]; 
$equiposuser=mysqli_query($link,"SELECT COUNT(idusuario) from equipo where idusuario='$idusuario'");
while($equiposuserr = mysqli_fetch_row($equiposuser))
            {
              $ne=$equiposuserr[0];
               
            }
$asignacionuser=mysqli_query($link,"SELECT COUNT(idusuario) from procesoasig where idusuario='$idusuario'");
while($equiposusera = mysqli_fetch_row($asignacionuser))
            {
              $nea=$equiposusera[0];
               
            }
$miembrouser=mysqli_query($link,"SELECT correl from registro where idusuario='$idusuario'");
while($equiposuserf = mysqli_fetch_row($miembrouser))
            {
              $nef=$equiposuserf[0];
               
            }
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
                         <li class="nav-item d-none d-md-block"> <a class="nav-link waves-effect waves-dark" href="dataexport.php"><i class="mdi mdi-arrow-left-bold font-24"></i></a>

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
                                                    <span class="btn btn-success btn-circle"><i class="ti-settings"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Equipos</h5> 
                                                        <span class="mail-desc">Usted ha registrado: <?php echo $ne; ?> equipo/s </span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i class="fa fa-link"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Asignacion</h5> 
                                                        <span class="mail-desc">Ha realizado: <?php echo $nea; ?> asignacion/es </span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i class="ti-user"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Registro</h5> 
                                                        <span class="mail-desc">Correlativo N°: <?php echo $nef;?> </span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php
                                $image_list = glob("./assets/fotos/$idusuario*.jpg");
                                foreach($image_list as $image){
                                    //echo $image;
                                ?>
                                <img src="<?php echo $image; ?>" alt="user" class="rounded-circle" width="40" ></a>
                                <?php
                                }
                                ?>                              
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item"><i class="fas fa-user m-r-5 m-l-5"></i>¡Hola <?php echo $_SESSION["usuarioactual"] ?>!</a>
                                <a class="dropdown-item" href="bottel.php"><i class="fab fa-telegram m-r-5 m-l-5"></i>
<?php
                           $querbot=mysqli_query($link,"SELECT idusuario FROM botrecord  WHERE idusuario='$idusuario'");
                           $checkbot = mysqli_num_rows($querbot); 
            if ($checkbot >0 ) {
                          echo "Modificar notificaciones";
                           }
                           else{
                       echo "Activar notificaciones";
                        }
                         ?></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="myinfo.php"><i class="fas fa-info-circle m-r-5 m-l-5"></i> Mi informacion</a>
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
                           <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Usuarios </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="consultausuarios.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Consultar </span></a></li>
                                <li class="sidebar-item"><a href="registrouserbasic.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Agregar </span></a></li>
                            </ul>
                        </li>
                         <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Equipos </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="consultaequipos.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Consultar entradas </span></a></li>
                                <li class="sidebar-item"><a href="registroequipo.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Registrar entrada </span></a></li>
                                <li class="sidebar-item"><a href="addcat.php" class="sidebar-link"><i class="mdi mdi-cube-outline"></i><span class="hide-menu"> Agregar categoria </span></a></li>                                 
                                <li class="sidebar-item"><a href="consultarcat.php" class="sidebar-link"><i class="mdi mdi-cube"></i><span class="hide-menu"> Verificar categorias </span></a></li>                                
                           
                        </li>
                            </ul>
                        </li>
                        
                          <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-blur-linear"></i></i><span class="hide-menu">Aulas </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="consultaraula.php" class="sidebar-link"><i class="mdi mdi-arrow-down-box"></i><span class="hide-menu"> Listado de aulas </span></a></li>
                                <li class="sidebar-item"><a href="addaula.php" class="sidebar-link"><i class="mdi mdi-plus-outline"></i><span class="hide-menu">Agregar aula </span></a></li>
                                <li class="sidebar-item"><a href="asignacion.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Registrar salidas </span></a></li>
                                <li class="sidebar-item"><a href="consultaasig.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Consultar salidas </span></a></li>                          
                            </ul>

                           
                             <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-database"></i></i><span class="hide-menu">Datos</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="dataimport.php" class="sidebar-link"><i class="mdi mdi-debug-step-into"></i><span class="hide-menu"> Importar </span></a></li>
                                <li class="sidebar-item"><a href="dataexport.php" class="sidebar-link"><i class="mdi mdi-debug-step-out"></i><span class="hide-menu"> Exportar </span></a></li>
                            </ul>

                                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-lock"></i><span class="hide-menu">Firma digital </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="registrohuella.php" class="sidebar-link"><i class="mdi mdi-lock-outline"></i><span class="hide-menu"> Agregar </span></a></li>
                                <li class="sidebar-item"><a href="modificarfirma.php" class="sidebar-link"><i class="mdi mdi-lock-open-outline"></i><span class="hide-menu"> Modificar </span></a></li>
                            </ul>
                        </li>
                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="estadisticas.php" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Estadisticas</span></a></li>
                           <?php
                           $queryv=mysqli_query($link,"SELECT iduser FROM encuesta WHERE iduser='$idusuario'");
                           $verif=0;
                           while($rowv = mysqli_fetch_row($queryv))
            {
              $verif=$rowv[0];
            }
            if ($verif == $idusuario) {
                          
                           }
                           else{
                       echo "<li class='sidebar-item'> <a class='sidebar-link waves-effect waves-dark sidebar-link' href='encuesta.php' aria-expanded='false'><i class='mdi mdi-script'></i><span class='hide-menu'>Encuesta</span></a></li>                       
                        </li>";
                        }
                         ?>
        
                    
                       
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
                        <h4 class="page-title">Busqueda de reporte</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="bienvenido.php">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Busqueda</li>
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
                            <form class="form-horizontal" action="excelinv3.php" method="post">
                                <div class="card-body">
                                    <h4 class="card-title">Reporte por categoria</h4>
                                    
                                       <div class="form-group row">
                                         <select class="select form-control custom-select" name="tipo" style="width: 100%; height:36px;">
<?php $queryselectip=mysqli_query($link,"SELECT idtipo,nombre FROM tipo");
            while($rowtip = mysqli_fetch_row($queryselectip))
            {
                                 ?>
                                <option value=<?php echo $rowtip[0]?>><?php echo $rowtip[1]?></option>
                                        <?php }
                                        ?>
                                             </select>
                                    </div>
                                 
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <input type="submit" value="Ingresar" class="btn btn-info" name="Enviar">
                                    </div>
                                </div>
                            </form>
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
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="dist/js/pages/mask/mask.init.js"></script>
    <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>

</html>