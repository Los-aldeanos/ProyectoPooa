<?php
  require_once "config.php";

  $var_user = $var_code="";
  $campos_vacios=false;
  $prueba=false;

  if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty(trim($_POST["usuario"])))
      $campos_vacios=true;
    else{
      $var_user=trim($_POST["usuario"]);
      $prueba=true;
    }

    if(empty(trim($_POST["clave"])))
      $campos_vacios=true;
    else
      $var_code=trim($_POST["clave"]);
    }

    if($campos_vacios==false)
    {
      $query = "select * from usuarios where username='$var_user' and contraseña='$var_code' ";
      
      $result = mysqli_query($link, $query);

      $filas=mysqli_num_rows($result);
      if ($filas > 0){
        session_start();
        $_SESSION['usuario']=$var_user;
        header('Location:table_user.php');
      }
      else{
        if($prueba==true){
        header('Location:index.php');}
      }
    }
    mysqli_close($link);
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Gym Spartans</title>

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
  <!-- MAIN CONTENT -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"method ="post">
        <h2 class="form-login-heading">Inicia ahora</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="Usuario" name="usuario" autofocus required><br>
          <input type="password" class="form-control" placeholder="Contraseña" name="clave" required><br>
          <button type="submit" class="btn btn-theme btn-block"> Iniciar sesión</button>
        </div>
      </form>
    </div>
  </div>
  <div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/ny.jpg", {
      speed: 500
    });
  </script>
</body>

</html>