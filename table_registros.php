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
          <p class="centered"><a href="profile.php"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">S Soffes</h5>
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
                <h4><i class="fa fa-angle-right"></i> Registros de entrada</h4>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Usuarios</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Nombre</th>
                    <th><i class="fa fa-bookmark"></i> Profit</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th><i class="fa fa-bookmark"></i> Profit</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th><i class="fa fa-bookmark"></i> Profit</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <a href="basic_table.html#">Total Ltd</a>
                    </td>
                    <td class="hidden-phone">Lorem Ipsum dolor</td>
                    <td>12120.00$ </td>
                    <td><span class="label label-warning label-mini">Due</span></td>
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
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
