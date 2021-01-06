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
          <?php echo "<h5 class='centered'>".$_SESSION['usuario'] ."</h5>" ?>
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
            <a class="active" href="membresias.php">
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
        <h3><i class="fa fa-angle-right"></i> Registro de membresias</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form class="form-horizontal  style-form" action="validar.php" method="post">
                <div class="form-group ">
                    <label class="control-label col-lg-2">Id de la membresia</label>
                    <div class="col-lg-8">
                      <?php 
                      require_once "config.php";
                    $sql = "select MAX(idmembresia) as id from membresia";
                    $result=mysqli_query($link,$sql);
                  while($row = mysqli_fetch_array($result)){
                    $id=$row["id"]+1;
                    echo "<input class=' form-control' id='user' readonly name='idmem' type='text' value='$id' required />";
                    }
                    ?>
                    
                    </div>
                  </div>
                <div class="form-group">
                  <label class="control-label col-md-2">Nombre</label>
                  <div class="col-md-8">
                    <input  type="text" class="form_datetime form-control" name="nombre" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2">Precio</label>
                  <div class="col-md-8">
                    <input  type="text" class="form_datetime form-control" name="precio" required>
                  </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-lg-2">Numero de meses</label>
                    <div class="col-md-8">
                    <input  type="text" class="form_datetime form-control" name="meses" required>
                  </div>
                  </div>
                  <div>
                      <input type="hidden" name="option" value=5>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Guardar</button>
                      <button class="btn btn-theme04" type="button">Cancelar</button>
                    </div>
                  </div>
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- row -->
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
        <a href="pricing_table.html#" class="go-top">
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

</body>

</html>
