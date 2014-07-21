<?php 
<<<<<<< HEAD
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Integrante.php');
      include ('../../controllers/IntegranteController.php');
      include ('../../libs/Er.php');
     include ('../layouts/header.php'); 
     
  echo "<pre>datos:";
  print_r($_POST);
  print_r($_FILES);
  echo"</pre>";
 $integranteC = new IntegranteController();
  if (isset($_POST['nombre'])){  
  $integranteC->insertaIntegrante($_POST,$_FILES);
    echo  $integranteC->alertas();
  }
=======
 session_start();
  include ('../layouts/header_simple.php'); 
>>>>>>> 9ebcf0adc8c1c356bb3cddeb461183c12b2e03d5
?>
<div class="row">
	<div class="col-lg-4 col-lg-offset-4">
	<div><h2 align="center">Registro de Entrenandores</h2></div><br/>		
    <form role="form" id="registro_entrenador" action="" method="post"  enctype="multipart/form-data">                   
      <div class="form-group">
        <label for="id_pais">Pais:</label>
          <select id="id_pais" name="id_pais" class="form-control">
            <option>Selecciona</option>
            <option>001</option>
            <option>002</option>                    
          </select>
      </div>              
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
        	
</div>
</div>

<?php include ('../layouts/footer_simple.php'); ?>
