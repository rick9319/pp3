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
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
         <script src="assets/plotly-latest.min.js"></script>
         <script type="text/javascript" src="assets/jquery.js"></script>
    <script type="text/javascript" src="assets/jquery.maskedinput.js"></script>
    <style>
video {
  width: 100%;
  height: auto;
}
</style>
    <style>
        input{
            border: none;
        }
    </style>
    <style type="text/css">
        
        * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
    </style>
    <script>
function startTime() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
    hr = (hr == 0) ? 12 : hr;
    hr = (hr > 12) ? hr - 12 : hr;
    //Add a zero in front of numbers<10
    hr = checkTime(hr);
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
    
    var months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    var days = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
    var curWeekDay = days[today.getDay()];
    var curDay = today.getDate();
    var curMonth = months[today.getMonth()];
    var curYear = today.getFullYear();
    var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear;
    document.getElementById("date").innerHTML = date;
    
    var time = setTimeout(function(){ startTime() }, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
    </script>
        <script>
    function sololetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>

</head>

<body onload="startTime()">



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
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                   
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> 

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
                                <a class="dropdown-item" href="chat.php"><i class="fas fa-comments m-r-5 m-l-5"></i> Mensajes</a>
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
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="estadisticas.php" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Estadisticas</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Equipos </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="consultaequipos.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Consultar entradas </span></a></li>
                                <li class="sidebar-item"><a href="registroequipo.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Registrar entrada </span></a></li>
                                <li class="sidebar-item"><a href="addcat.php" class="sidebar-link"><i class="mdi mdi-cube-outline"></i><span class="hide-menu"> Agregar categoria </span></a></li>                                 
                                <li class="sidebar-item"><a href="consultarcat.php" class="sidebar-link"><i class="mdi mdi-cube"></i><span class="hide-menu"> Verificar categorias </span></a></li>                                 
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="solicitud.php" aria-expanded="false"><i class="mdi mdi-file-check"></i><span class="hide-menu">Solicitud</span></a></li>
                        </li>
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
                         <br>
                    
                       
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
                        
                        <h4 class="page-title">Bienvenido al Sistema de Entradas y Salidas - UEES</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                
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
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div  style="background-color: #09b89b" class="box text-center" >
                                <h1 class="font-light text-white"><i class="mdi mdi-clock"></i></h1>
                                <h6 class="text-white"><div id="clockdate">
  <div class="clockdate-wrapper">
    <div id="clock"></div>
    <div id="date"></div>
  </div>
</div></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover"> 
                            <div  style="background-color: #f29a0c" class="box text-center" >
                                <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                                <h6><a href="estadisticas.php" class="text-white">Estadisticas</a></h6>
                            </div>
                        </div>
                    </div>
                     <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                                <h6><a href="asignacion.php" class="text-white">Asignacion</a></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                <h6><a href="consultaequipos.php" class="text-white">Consulta de equipos</a></h6>
                            </div>
                        </div>
                    </div>
               
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div  style="background-color: #bf0b4d" class="box text-center" > 
                                <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                                <h6><a href="consultausuarios.php"class="text-white">Usuarios</a> </h6>
                            </div>
                        </div>
                    </div>
   
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-primary text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                                <h6> <a href="consultaraula.php" class="text-white">Aulas</a></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-calendar-check"></i></h1>
                                 <h6><a href="calendario.php" class="text-white">Calendario</a></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div  style="background-color:#ffd900" class="box text-center" > 
                                <h1 class="font-light text-white"><i class="mdi mdi-alert"></i></h1>
                                <h6><a href="acercade.php" class="text-white">Acerca de</a></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title"></h4>
                                        <h5 class="card-subtitle"></h5>
                                    </div>
                                </div>
                                <div class="row">
                               
                                    <div class="col-lg-9">
                                        <div class="flot-chart" id="grafica">
                                            <?php  
 $fechae=mysqli_query($link,"SELECT idequipo from equipo where month(fechre)=1 AND year(fechre)=(    
SELECT EXTRACT(YEAR FROM CURRENT_DATE))");
$fechare=mysqli_num_rows($fechae);

$fechaf=mysqli_query($link,"SELECT idequipo from equipo where month(fechre)=2 AND year(fechre)=(    
SELECT EXTRACT(YEAR FROM CURRENT_DATE))");
$fecharf=mysqli_num_rows($fechaf);

$fecham=mysqli_query($link,"SELECT idequipo from equipo where month(fechre)=3 AND year(fechre)=(    
SELECT EXTRACT(YEAR FROM CURRENT_DATE))");
$fecharm=mysqli_num_rows($fecham);

$fechaa=mysqli_query($link,"SELECT idequipo from equipo where month(fechre)=4 AND year(fechre)=(    
SELECT EXTRACT(YEAR FROM CURRENT_DATE))");
$fechara=mysqli_num_rows($fechaa);

$fechamay=mysqli_query($link,"SELECT idequipo from equipo where month(fechre)=5 AND year(fechre)=(    
SELECT EXTRACT(YEAR FROM CURRENT_DATE))");
$fecharmay=mysqli_num_rows($fechamay);

$fechajun=mysqli_query($link,"SELECT idequipo from equipo where month(fechre)=6 AND year(fechre)=(    
SELECT EXTRACT(YEAR FROM CURRENT_DATE))");
$fecharjun=mysqli_num_rows($fechajun);

$fechajul=mysqli_query($link,"SELECT idequipo from equipo where month(fechre)=7 AND year(fechre)=(    
SELECT EXTRACT(YEAR FROM CURRENT_DATE))");
$fecharjul=mysqli_num_rows($fechajul);

$fechaag=mysqli_query($link,"SELECT idequipo from equipo where month(fechre)=8 AND year(fechre)=(    
SELECT EXTRACT(YEAR FROM CURRENT_DATE))");
$fecharag=mysqli_num_rows($fechaag);

$fechasep=mysqli_query($link,"SELECT idequipo from equipo where month(fechre)=9 AND year(fechre)=(    
SELECT EXTRACT(YEAR FROM CURRENT_DATE))");
$fecharsep=mysqli_num_rows($fechasep);

$fechaoc=mysqli_query($link,"SELECT idequipo from equipo where month(fechre)=10 AND year(fechre)=(    
SELECT EXTRACT(YEAR FROM CURRENT_DATE))");
$fecharoc=mysqli_num_rows($fechaoc);

$fechanov=mysqli_query($link,"SELECT idequipo from equipo where month(fechre)=11 AND year(fechre)=(    
SELECT EXTRACT(YEAR FROM CURRENT_DATE))");
$fecharnov=mysqli_num_rows($fechanov);

$fechadic=mysqli_query($link,"SELECT idequipo from equipo where month(fechre)=12 AND year(fechre)=(    
SELECT EXTRACT(YEAR FROM CURRENT_DATE))");
$fechardic=mysqli_num_rows($fechadic);

                                           ?>
                                       <script type="text/javascript">
                                var xValue = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

var yValue = [<?php echo $fechare;?>,<?php echo $fecharf;?>,<?php echo $fecharm;?>,<?php echo $fechara;?>,<?php echo $fecharmay;?>,<?php echo $fecharjun;?>,<?php echo $fecharjul;?>,<?php echo $fecharag;?>,<?php echo $fecharsep;?>,<?php echo $fecharoc;?>,<?php echo $fecharnov;?>,<?php echo $fechardic;?>,];

var trace1 = {
  x: xValue,
  y: yValue,
  type: 'bar',
  text: yValue.map(String),
  textposition: 'auto',
  hoverinfo: 'none',
  marker: {
    color: 'rgb(255, 228, 20)',
    opacity: 1.0,
    line: {
      color: 'rgb(6, 44, 97)',
      width: 1.0
    }
  }
};

var data = [trace1];

var layout = {
  title: 'EQUIPOS REGISTRADOS DURANTE EL AÑO'
};
Plotly.newPlot('grafica', data,layout);
                                       </script>
                                       <?php

                                         ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row">
                                               <div class="col-6 m-t-15">
                                                <div class="bg-info p-10 text-white text-center">
                                                   <i class="fab fa-elementor m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">
<?php
                                                    $naulas= mysqli_query($link,"SELECT idaula FROM aula");
$rownaulas= mysqli_num_rows($naulas);
echo $rownaulas; 
?>
        </h5>
                                                   <small class="font-light">Total de aulas UEES</small>
                                                </div>
                                            </div>
                                             <div class="col-6 m-t-15">
                                                <div  style="background-color:#079af5" class="p-10 text-white text-center">
                                                   <i class="fa fa-user m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5"><?php
                                                    $nuser= mysqli_query($link,"SELECT idusuario FROM registro");
$rownuser= mysqli_num_rows($nuser);
echo $rownuser; 
?></h5>
                                                   <small class="font-light">Usuarios registrados</small>
                                                </div>
                                            </div>
                                               <div class="col-6 m-t-15">
                                                <div style="background-color:#079af5" class="p-10 text-white text-center">
                                                   <i class="fas fas fa-laptop m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5"><?php
                                                    $nequipo= mysqli_query($link,"SELECT idequipo FROM equipo");
$rownequipo= mysqli_num_rows($nequipo);
echo $rownequipo; 
?></h5></h5>
                                                   <small class="font-light">Equipos en inventario</small>
                                                </div>
                                            </div>
                                       <div class="col-6 m-t-15">
                                                <div class="bg-info p-10 text-white text-center">
                                                   <i class="fab fa-elementor m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">
<?php
                                                    $naulas= mysqli_query($link,"SELECT idtipo FROM tipo");
$rownaulas= mysqli_num_rows($naulas);
echo $rownaulas; 
?>
        </h5>
                                                   <small class="font-light">Categorias registradas</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
       <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                               
                                <p> <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides slide">
    <div class="numbertext">1 / 3</div>
    <img src="assets/images/img1.jpg" style="width:100%">
    
  </div>

  <div class="mySlides slide">
    <div class="numbertext">2 / 3</div>
     <img src="assets/images/img3.jpg" style="width:100%">
    
  </div>

  <div class="mySlides slide">
    <div class="numbertext">3 / 3</div>
    <img src="assets/images/img2.jpg" style="width:100%">
  
   
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">MISIÓN</h5>
                                <p>“Formar profesionales con excelencia académica, conscientes del servicio a sus semejantes y con una ética cristiana basada en las sagradas escrituras para responder a las necesidades y cambios de la sociedad.”</p>
                            </div>
                        </div>
                    </div>
                           <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">VISIÓN</h5>
                                <p>“Ser la institución de educación superior, líder regional por su excelencia académica e innovación científica y tecnológica; reconocida por su naturaleza y práctica cristiana.”</p>
                            </div>
                        </div>
                    </div>
                     </div>
                                  <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <video width="400" controls>
  <source src="assets/uees.mp4" type="video/mp4">
Video no soportado
</video>
                            </div>
                        </div>
                    </div>
                </div>
                </div>



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

    <script language="javascript" type="text/javascript">
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<script language="JavaScript" type="text/javascript">
  $(document).ready(function(){
    $('.carousel').carousel({
      interval: 3000
    })
  });    
</script>

</body>

</html>