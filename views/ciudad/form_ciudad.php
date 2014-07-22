<?php 
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Ciudad.php');
      include ('../../controllers/CiudadController.php');
      include ('../../libs/Er.php');
      include ('../layouts/header.php'); 

      //echo "<pre>datos:";
  //print_r($_POST); 
  //echo"</pre>";
 $ciudadC = new CiudadController();
  if (isset($_POST['nombre'])){  
  $ciudadC->insertaCiudad($_POST);
    echo  $ciudadC->alertas();
  }

?>
<div class="row">
<body background="../img/fut.jpg">
	<div class="col-lg-4 col-lg-offset-4"><br/>
	<div><h2 align="center">Registro de Ciudades</h2></div><br/>		
    <form role="form" id="registro_ciudad" action="" method="post"  enctype="multipart/form-data">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
      </div>              
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
        	
</div>
</div>

<?php include ('../layouts/footer.php'); ?>