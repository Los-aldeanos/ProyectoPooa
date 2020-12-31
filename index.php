<?php
  require_once "config.php";

  $var_code = $var_lang= $var_is_offi= $var_perc="";
  $campos_vacios=false;

  if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty(trim($_POST["usuario"])))
      $campos_vacios=true;
    else
      $var_code=trim($_POST["usuario"]);


    if(empty(trim($_POST["clave"])))
      $campos_vacios=true;
    else
      $var_lang=trim($_POST["clave"]);

    if($campos_vacios==false)
    {
      $query = "INSERT INTO countrylanguage (CountryCode, Language, IsOfficial,Percentage) VALUES (?,?,?,?)";

      if($statement = mysqli_prepare($link,$query))
      {
        mysqli_stmt_bind_param($statement,'ssss',$parm_code,$parm_lang,$parm_offi,$parm_percnt);

        $parm_code= $var_code;
        $parm_lang=$var_lang;
        $parm_offi=$var_is_offi;
        $parm_percnt=$var_perc;

        if (mysqli_stmt_execute($statement))
          mysqli_stmt_close($statement);
        else
          echo "No se logró enviar la información";

      }
    }
    mysqli_close($link);
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

          <input type="text" class="form-control" placeholder="Usuario" name="usuario" autofocus required>
          <br>

          <input type="password" class="form-control" placeholder="Contraseña" name="clave" required>

          <label class="checkbox">
            <!--<input type="checkbox" value="remember-me"> Recordar
            <span class="pull-right">
            <a data-toggle="modal" href="login.html#myModal"> Olvido la contraseña?</a>-->
            </span>
            </label>
          <button type="submit" class="btn btn-theme btn-block"> Iniciar sesión</button>

        </div>

        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Olvidaste la contraseña ?</h4>
              </div>
              <div class="modal-body">
                <p>Ingresa tu correo para recuperar la contraseña.</p>
                <input type="text" name="emailprueba" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
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
