<?php 
      include ('../../libs/security.php');
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Integrante.php');
      include ('../../controllers/IntegranteController.php');
      include ('../../libs/Er.php');
       include ('../layouts/header.php'); 
 //echo "<pre>datos:";
  //print_r($_POST);
  //print_r($_FILES);
  //echo"</pre>";
 $integranteC = new IntegranteController();
  if (isset($_POST['nombre'])){  
  $integranteC->insertaIntegrante($_POST,$_FILES);
    echo  $integranteC->alertas();
  }
  
?>
<div class="row">
<body background="../img/integra.jpg">
	<div class="col-lg-4 col-lg-offset-4"><br/><br/><br/>
	<div><h2 align="center">Registro de Integrantes</h2></div><br/>		
    <form role="form" id="registro_integrante" action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
      </div>
      <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="apellido">
      </div><div class="form-group">
        <label for="abstract">Peso:</label>
        <input type="number" class="form-control" id="peso" name="peso" placeholder="Peso">
      </div><div class="form-group">
        <label for="estatura">Estatura:</label>
        <input type="number" class="form-control" id="estatura" name="estatura" placeholder="Estatura">
      </div>                           
      <div class="form-group">
        <label for="foto">Foto:</label>
        <input type="file" class="form-control" name="foto" id="foto">
      </div>
      <div class="form-group">
        <label for="edad">Edad:</label>
        <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad">
      </div>              
      <div class="form-group">
        <label for="id_equipo">Equipo:</label>
          <?php echo $integranteC->getDropDown('equipo','id_equipo','id_equipo');?>
      </div>              
      <button type="submit" class="btn btn-default">Enviar</button>     
    </form>
   	<div align="center">
        <p><a class="fancybox" data-fancybox-type="iframe" href="form_entrenador.php" role="button">Entrenador</a></p> 
        <p><a class="fancybox" data-fancybox-type="iframe" href="form_jugador.php" role="button">Jugador</a></p> 
    </div>  
       	
</div>
</div>

<?php include ('../layouts/footer.php'); ?>