<?php 
  include("conexion.php"); 
  include("seguridad.php");   
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
$search=$_REQUEST['search'];

if (isset($_REQUEST["nombre"])){
$nombre=$_REQUEST['search'] ;
}
else{
    $nombre='';
}
if (isset($_REQUEST["apellidos"])){
$apellidos= $_REQUEST['search'] ;  

}
else{
    $apellidos='';
}
if (isset($_REQUEST["correlativo"])){
$correl=$_REQUEST['search'] ;
}
else{
    $correl='';
}
if (isset($_REQUEST["nombreusuario"])){
$nombreusuario=$_REQUEST['search'] ;

}
else{
    $nombreusuario='';
}
if (isset($_REQUEST["marca"])){
$marca=$_REQUEST['search'] ;

}
else{
    $marca='';
}
if (isset($_REQUEST["modelo"])){
$modelo=$_REQUEST['search'] ;

}
else{
    $modelo='';
}
if (isset($_REQUEST["numeros"])){
$numeros=$_REQUEST['search'] ;

}
else{
    $numeros='';
}
if (isset($_REQUEST["tipo"])){
$tipo=$_REQUEST['search'] ;
}
else{
    $tipo='';
   
}
if (isset($_REQUEST["aula"])){
$aula=$_REQUEST['search'] ;
}
else{
    $aula='';
   
}
if (isset($_REQUEST["estado"])){
$estado=$_REQUEST['search'] ;
}
else{
    $estado='';
   
}
$resultb=mysqli_query($link,"SELECT procesoasig.idasig, procesoasig.cantidad,procesoasig.aprob,procesoasig.fechaasig, aula.aula,equipo.marca,equipo.modelo,equipo.nserie,tipo.nombre, registro.nombre,registro.apellidos,registro.correl,registro.nombreusuario FROM ((((procesoasig  INNER JOIN aula ON aula.idaula=procesoasig.idaula) INNER JOIN equipo ON equipo.idequipo=procesoasig.idequipo) INNER JOIN tipo ON tipo.idtipo=equipo.idtipo)  INNER JOIN registro ON registro.idusuario=procesoasig.idusuario)  WHERE registro.nombre LIKE '%$nombre%' AND registro.apellidos LIKE '%$apellidos%' AND registro.correl LIKE '%$correl%' AND registro.nombreusuario LIKE '%$nombreusuario%' AND equipo.marca LIKE '%$marca%' AND equipo.modelo LIKE '%$modelo%' AND equipo.nserie LIKE '%$numeros%' AND tipo.nombre LIKE '%$tipo%' AND aula.aula LIKE '%$aula%' AND procesoasig.aprob LIKE '%$estado%' ");


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
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
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
<ul class="navbar-nav float-left mr-auto">
                               <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                         <li class="nav-item d-none d-md-block"> <a class="nav-link waves-effect waves-dark" href="consultaasig.php"><i class="mdi mdi-arrow-left-bold font-24"></i></a>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                   
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                       <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute" action="busquedasalidas.php" method="POST">
                          <table bgcolor="white">
                                <tr><input type="text" class="form-control" placeholder="Buscar equipo/s (salidas)" name="search"> <a class="srh-btn"><i class="ti-close"></i></a></tr>
                                <tr> <td><label><font color="#0e144d">FILTROS DE BUSQUEDA</font></label></td></tr>
                                <tr><td>
<input value="nombre" name="nombre" type="checkbox" size="50"><font color="#0e144d">Nombre</font>
<input value="apellidos" name="apellidos" type="checkbox" size="50"><font color="#0e144d">Apellidos</font>
<input value="nombreusuario" name="nombreusuario" type="checkbox" size="50"><font color="#0e144d">Nombre de usuario</font>
<input value="correlativo" name="correlativo" type="checkbox" size="50"><font color="#0e144d">Correlativo</font>
<input value="nombreusuario" name="marca" type="checkbox" size="50"><font color="#0e144d">Marca</font>
<input value="modelo" name="modelo" type="checkbox" size="50"><font color="#0e144d">Modelo</font>
<input value="nombreusuario" name="numeros" type="checkbox" size="50"><font color="#0e144d">Numero de serie</font>
<input value="tipo" name="tipo" type="checkbox" size="50"><font color="#0e144d">Tipo</font>
<input value="aula" name="aula" type="checkbox" size="50"><font color="#0e144d">Aula</font>
<input value="estado" name="estado" type="checkbox" size="50"><font color="#0e144d">Estado</font>


                                </td></tr>
                                </table>
                            </form>
                        </li>
                    </ul>                    <ul class="navbar-nav float-right">
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
                        <h4 class="page-title">Resultados de la busqueda....</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="bienvenido.php">Inicio</a></li>
                                    <li class="breadcrumb-item"><a href="consultaequipos.php">Consulta equipos</a></li>
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
                    <div class="col-12">
                         <div class="card">
                            <div class="card-body">
                             <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>

           
            <tr align='center'>
        <th>Cantidad asignada</th>
        <th>Aula</th>
<th>Estado de aprobacion</th>
<th>Fecha de asignacion</th>
<th>Marca</th>
<th>Modelo</th>
<th>Numero de serie</th>
<th>Tipo</th>
<th>Nombre</th>
<th>Apellidos</th>
<th>Correlativo</th>
<th>Nombre de usuario</th>
<th colspan='2'>Opciones</th>
</tr>
</thead>


            <?php  
            while($row = mysqli_fetch_row($resultb))
            {
$id = $row[0];
?>  
<tbody>
<tr align='center'>
<td style="display:none;"> <?php echo $row[0]?> </td>
<td> <?php echo $row[1]?> </td>
<td> <?php echo $row[2]?> </td>
<td> <?php echo $row[3]?> </td>
<td> <?php echo $row[4]?> </td>      
              <td> <?php echo $row[5]?> </td>
             <td> <?php echo $row[6]?></td>
            <td><?php echo $row[7]?> </td>
                <td> <?php echo $row[8]?> </td>
               <td> <?php echo $row[9]?></td>
               <td> <?php echo $row[10]?></td>
               <td> <?php echo $row[11]?></td>
<td> <?php echo $row[11]?></td>
    <td><?php echo"<a href ='formprobh.php?idasig=$id'><center><i class='fas far fa-newspaper'></i>Formulario</a></center>"; ?></td>
<td><?php echo"<a href ='editaasig.php?idasig=$id'><center><i class='fas fa-edit'></i>Editar</a></center>"; ?></td>

<td><?php echo"<a href ='delasig.php?idasig=$id'><center><i class='fas fa-eraser'></i>Eliminar</a></center>";?>
</td>
</tr>
</tbody>
<?php
            }
            
            ?>
                                        
                                           
    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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
                <p><a href="https://www.facebook.com/ueesoficial/" target="_blank"> <i class="font-24 mdi mdi-facebook-box"></i></a>
                 <a href="https://twitter.com/ueesoficial" target="_blank"> <i class="font-24 mdi mdi-twitter-box"></i></a>
                   <a href="https://www.instagram.com/explore/locations/1012393993/" target="_blank"> <i class="font-24 mdi mdi-instagram"></i></a></p>
                
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
    <!-- this page js -->
    <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

</body>

</html>