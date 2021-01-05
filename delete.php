<?php 
  session_start();
  if(empty($_SESSION['usuario'])){
    session_start();
    session_destroy();
    header('location:index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Gym Spartaco</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

</head>

<body>
  <section id="container">
    <!--header start-->
    <?php 
     include "header.php";
    ?>
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.php"><img src="img/LOG-Gym.jpg" class="img-circle" width="80"></a></p>
           <?php echo "<h5 class='centered'>".$_SESSION['usuario'] ."</h5>" ?>
          <li class="mt">
          </li>
          <li>
            <a class="active" href="table_user.php">
              <i class="fa fa-th"></i>
              <span>Tabla de usuarios</span>
              </a>
          </li>
          <li>
            <a href="table_registros.php">
              <i class="fa fa-th"></i>
              <span>Tabla de registros</span>
              </a>
          </li>
          <li>
            <a href="table_citas.php">
              <i class="fa fa-th"></i>
              <span>Tabla de citas</span>
              </a>
          </li>
          <li>
            <a href="calendar.php">
              <i class="fa fa-calendar-o"></i>
              <span>Calendario</span>
              </a>
          </li>
          <li>
            <a href="membresias.php">
              <i class="fa fa-money"></i>
              <span>Membresias</span>
              </a>
          </li>
          <li>
            <a href="regent.php">
              <i class="fa fa-share"></i>
              <span>Registro de entradas</span>
              </a>
          </li>
          <li>
            <a href="usuarios.php">
              <i class="fa fa-check"></i>
              <span>Registrar usuario</span>
              </a>
          </li>
          <li>
            <a href="perfil.php">
              <i class="fa fa-user"></i>
              <span>Perfil</span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Eliminar usuario</h3>
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class="form">

                <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="valdelete.php">
                  <?php
                  require_once "config.php";
                  $id=$_GET['id'];
                  $query ="select * from usuarios where idusuarios=$id";

                  $result=mysqli_query($link,$query);
                  while($row = mysqli_fetch_array($result)){
                    $iduser=$row["idusuarios"];
                    $username=$row["username"];
                    $nombre=$row["nombre"];
                    $ap_pat=$row["ap_paterno"];
                    $ap_mat=$row["ap_materno"];
                    $edad=$row["edad"];
                    $tel=$row["telefono"];
                    $correo=$row["correo"];
                    $membresia=$row["id_membresias"];
                  ?>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Id usuario</label>
                    <div class="col-lg-10">
                      <input class="form-control" value="<?php echo $iduser; ?>" id="firstname" name="id" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2" >Usuario</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="lastname" value="<?php echo $username; ?>" name="usuario" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2" >Nombre</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" value="<?php echo $nombre; ?>" name="nombre" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2" >Apellido paterno</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" value="<?php echo $ap_pat; ?>" name="paterno" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2" >Apellido Materno</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" value="<?php echo $ap_mat; ?>" name="materno" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2" >Edad</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" value="<?php echo $edad; ?>" name="edad" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2" >Telefono</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" value="<?php echo $tel; ?>" name="telefono" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2" >Correo</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" value="<?php echo $correo; ?>" name="correo" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2" >Membresia</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" value="<?php echo $membresia; ?>" name="mem" type="text" />
                    </div>
                  </div>
                  <?php
                }
                ?>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="actualizar">Eliminar</button>
                      <button class="btn btn-theme04" onclick="location='table_user.php'" type="button">Cancelar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <br><br><br><br><br><br>
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="blank.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>
