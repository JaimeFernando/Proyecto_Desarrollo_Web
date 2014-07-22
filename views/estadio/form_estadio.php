<?php 
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Estadio.php');
      include ('../../controllers/EstadioController.php');
      include ('../../libs/Er.php');
      include ('../layouts/header.php'); 

  //echo "<pre>datos:";
  //print_r($_POST);
  //echo"</pre>";
 $estadioC = new EstadioController();
  if (isset($_POST['nombre'])){  
  $estadioC->insertaEstadio($_POST);
    echo  $estadioC->alertas();
  }
?>
<div class="row">
	<div class="col-lg-4 col-lg-offset-4"><br/><br/><br/>
	<div><h2 align="center">Registro de Estadios</h2></div><br/>		
    <form role="form" id="registro_estadio" action="" method="post"  enctype="multipart/form-data">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
      </div>              
      <div class="form-group">
        <label for="id_ciudad">Ciudad:</label>
          <?php echo $estadioC->getDropDown('ciudad','id_ciudad','id_ciudad');?>
      </div>              
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
        	
</div>
</div>

<?php include ('../layouts/footer.php'); ?>