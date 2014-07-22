<?php 
      
      include ('../../libs/security.php');
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Continente.php');
      include ('../../controllers/ContinenteController.php');
      include ('../../libs/Er.php');
      include ('../layouts/header.php'); 

  //echo "<pre>datos:";
  //print_r($_POST); 
  //echo"</pre>";
 $continenteC = new ContinenteController();
  if (isset($_POST['nombre'])){  
  $continenteC->insertaContinente($_POST);
    echo  $continenteC->alertas();
  }
?>
<div class="row">
<body background="../img/agua.jpg">
	<div class="col-lg-4 col-lg-offset-4"><br/><br/><br/>
	<div><h2 align="center">Registro de Continentes</h2></div><br/>		
    <form role="form" id="registro_continente" action="" method="post"  enctype="multipart/form-data">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
      </div>              
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
        	
</div>
</div>

<?php include ('../layouts/footer.php'); ?>