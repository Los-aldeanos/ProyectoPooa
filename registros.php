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
  <link href="img/FAVI-Spart.png" rel="icon">
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
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="perfil.php"><img src="img/LOG-Gym.jpg" class="img-circle" width="80"></a></p>
          <?php
          echo "<h5 class='centered'>".$_SESSION['usuario'] ."</h5>"
          ?>
          <li class="mt">
          </li>
          <li>
            <a href="table_user.php">
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
            <a href="membresias.php">
              <i class="fa fa-money"></i>
              <span>Membresias</span>
              </a>
          </li>
          <li>
            <a href="regcitas.php">
              <i class="fa fa-share"></i>
              <span>Registro de citas</span>
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
        <h3><i class="fa fa-angle-right"></i> Registro de entradas</h3>
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="createuser.php">
                  <div class="form-group ">
                    <label class="control-label col-lg-2">Id de usuario</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="user" name="usuario" type="text"required />
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-md-3">Hora de entrada</label>
                  <div class="col-md-4">
                    <input size="16" type="text" value="2014-01-01 10:00" readonly class="form_datetime form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Hora de salida</label>
                  <div class="col-md-4">
                    <input size="16" type="text" value="2014-01-01 10:00" readonly class="form_datetime form-control">
                  </div>
                </div>
                  <div class="form-group ">
                    <label class="control-label col-lg-2">Nombre</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="name" name="nombre" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label class="control-label col-lg-2">Apellido paterno</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="Ap_pat" name="ap_pat" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label class="control-label col-lg-2">Apellido materno</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="Ap_mat" name="ap_mat" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label class="control-label col-lg-2">Edad</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="edad" name="edad" type="text" pattern="[1-9][0-9]" title="La edad tiene que ser entre 10-99 años" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label class="control-label col-lg-2">Telefono</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="tele" name="telefono" type="tel" pattern="[0-9]{3} [0-9]{3}[0-9]{4}|[0-9]{3} [0-9]{3}[ -][0-9]{4}|[0-9]{10}" title="Numero no valido, el formato requerido es: ??? ??? ???? o ??? ???????"
                      placeholder="646 546 4659" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label class="control-label col-lg-2">Contraseña</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="password" name=" password" type="password" required/>
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="confirm_password" class="control-label col-lg-2">Confirma contraseña</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="confirm_password" name="requiredconfirm_password" type="password" required/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="email" name="email" type="email" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Tipo de usuario</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="tipo_user" name="tipo" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Membresia</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="membresia" name="membresia" type="text" required />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Guardar</button>
                      <button class="btn btn-theme04" type="button">Cancelar</button>
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
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="form_validation.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/form-validation-script.js"></script>

</body>

</html>
