<?php 
if(isset($_POST['cerrar'])){
  session_destroy();
  header('location:index.php');
}
?>
<header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>Gym<span> Spartaco</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <ul class="nav pull-right top-menu">
            <input type="hidden" name="cerrar">
           <li><input class="logout" type="submit" value="Desconectar"></li>
        </ul>
        </form>
      </div>
    </header>