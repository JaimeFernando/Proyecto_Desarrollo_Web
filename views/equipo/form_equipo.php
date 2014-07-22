<?php 

      //include ('../../libs/Security.php');
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Equipo.php');
      include ('../../controllers/EquipoController.php');
      include ('../../libs/Er.php');
      include ('../layouts/header.php'); 

  //echo "<pre>datos:";
  //print_r($_POST);
  //print_r($_FILES);
  //echo"</pre>";
 $equipoC = new EquipoController();
  if (isset($_POST['nombre'])){  
  $equipoC->insertaEquipo($_POST,$_FILES);
    echo  $equipoC->alertas();
  }
?>
<div class="row">
	<div class="col-lg-4 col-lg-offset-4"><br/><br/><br/>
        <div><h2 align="center">Registro de Equipos</h2></div><br/>		
        <form role="form" id="registro_equipo" action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
          </div>
          <div class="form-group">
            <label for="id_pais">Pais:</label>
                <?php echo $equipoC->getDropDown('pais','id_pais','id_pais');?>
          </div>  
          <div class="form-group">
            <label for="escudo">Escudo:</label>
            <input type="file" class="form-control" name="escudo" id="escudo">
          </div>      
          <button type="submit" class="btn btn-default">Enviar</button>
        </form>
                
	</div>
</div>

<?php include ('../layouts/footer.php'); ?>