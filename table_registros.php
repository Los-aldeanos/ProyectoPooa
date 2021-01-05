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
            <a href="table_user.php">
              <i class="fa fa-th"></i>
              <span>Tabla de usuarios</span>
              </a>
          </li>
          <li>
            <a class="active" href="table_registros.php">
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
            <a href="citas.php">
              <i class="fa fa-share"></i>
              <span>Citas</span>
              </a>
          </li>
          <li>
            <a href="membresias.php">
              <i class="fa fa-money"></i>
              <span>Membresias</span>
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
        <h3><i class="fa fa-angle-right"></i> Tabla de registros</h3>
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Registros de entradas</h4>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> ID usuario</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> IdRegistro</th>
                    <th><i class="fa fa-bookmark"></i> Entrada</th>
                    <th><i class="fa fa-bookmark"></i> salida</th>
                    <th><i class="fa fa-bookmark"></i> cita</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  require_once "config.php";

                  $query ="select * from registros order by idRegistros";

                  $result=mysqli_query($link,$query);
                  
                 

                  while($row = mysqli_fetch_array($result)){
                    $iduser=$row["Usuarios_id_usuarios"];
                    $username=$row["idRegistros"];
                    $entrada=$row["Entrada"];
                    $salida=$row["salida"];
                    $citas=$row["cita"];
                    
                    
                    echo "<tr><td>$iduser </td><td>$username</td><td>$entrada</td><td>$salida</td><td>$citas</td>";
                    ?>
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil" onclick="location.href='moduser.php?id=<?php echo $iduser;?>';"></i></button>
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o" onclick="location.href='delete.php?id=<?php echo $iduser;?>';" ></i></button>
                    </td>
                    </tr>
                      <?php
                      }
                    
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
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
        <a href="basic_table.html#" class="go-top">
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
