<?php 
  define('BASEURL','http://localhost/Proyecto_Desarrollo_Web');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FIFA</title>
    
	<link href="../css/miestilo.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!--BoostrapValidator-->
    <link rel="stylesheet" href="../css/bootstrapValidator.min.css"/>
	<!--Boostrap-Datetimepicker-->
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap-datetimepicker.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/pygments-manni.css" />
    <!-- Add fancyBox -->
     <link rel="stylesheet" href="../fancyBox/source/jquery.fancybox.css" type="text/css" media="screen" />
   
    <link href="../css/carousel.css" rel="stylesheet">
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../../index.php">FIFA</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo BASEURL; ?>/views/site/inicio.php">Inicio</a></li>
          <?php if(!isset($SESSION['user'])){?>  
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registrar<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../integrante/form_integrante.php">Integrante</a></li>
                <li><a href="../equipo/form_equipo.php">Equipo</a></li>                
                <li class="divider"></li>
                <li><a href="../estadio/form_estadio.php">Estadio</a></li>
                <li><a href="../ciudad/form_ciudad.php">Cuidad</a></li>
                <li><a href="../pais/form_pais.php">Pais</a></li>
                <li><a href="../continente/form_continente.php">Continente</a></li>
              </ul>
            </li>
          <?php } ?>

          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Listas<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../equipo/listaequipo.php">Lista de Equipos</a></li>
                <li><a href="../integrante/listaintegrante.php">Lista de Integrantes</a></li>                
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
  				  <?php if (!isset($_SESSION['user']) ){?> 
                	<li><a href="../site/login.php">
                  	<span class="glyphicon glyphicon-log-in"></span>Entrar</a>
                  </li>
            <?php } else{ ?>
                  <li><a href="../site/logout.php">
                  	<span class="glyphicon glyphicon-log-in"></span>Salir</a>
                  </li>
            <?php } ?>
          </ul> 

          

        </div><!--/.nav-collapse -->
      </div>
    </div>

    
    <div class="container"><br/><br/><br/>
    <div class="masthead">
    <!--Las tablas de mostraran al precionar cada uno de los siguentes botones correspondientemente-->     
        <ul class="nav nav-justified">
          <li><a class="various" data-fancybox-type="iframe" href="../pais/form_pais.php" role="button">Paises</a></li>
          <li><a class="various" data-fancybox-type="iframe" href="../equipo/form_equipo.php" role="button">Equipos</a></li>
          <li><a class="various" data-fancybox-type="iframe" href="../integrante/form_integrante.php" role="button">Jugadores</a></li>
          <li><a class="various" data-fancybox-type="iframe" href="../integrante/form_integrante.php" role="button">Entrenadores</a></li>
          <li><a class="various" data-fancybox-type="iframe" href="../ciudad/form_ciudad.php" role="button">Ciudades</a></li>
          <li><a class="various" data-fancybox-type="iframe" href="../estadio/form_estadio.php" role="button">Estadios</a></li>
        </ul>
      </div>
    </div>