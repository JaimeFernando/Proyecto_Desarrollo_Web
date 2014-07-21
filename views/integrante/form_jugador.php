<?php 
<<<<<<< HEAD
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Jugador.php');
      include ('../../controllers/JugadorController.php');
      include ('../../libs/Er.php');
     include ('../layouts/header.php'); 
     
  echo "<pre>datos:";
  print_r($_POST);  
  echo"</pre>";

  if (isset($_POST['nombre'])){  
  $jugadorC = new JugadorController();
  $jugadorC->insertaJugador($_POST);
    echo  $jugadorC->alertas();
  }
=======
 session_start();
  include ('../layouts/header_simple.php'); 
>>>>>>> 9ebcf0adc8c1c356bb3cddeb461183c12b2e03d5
?>
<div class="row">
	<div class="col-lg-4 col-lg-offset-4">
	<div><h2 align="center">Registro de Jugadores</h2></div><br/>		
    <form role="form" id="registro_jugador" action="" method="post"  enctype="multipart/form-data">
      <div class="form-group">
        <label for="numero">N&uacute;mero:</label>
        <input type="text" class="form-control" id="numero" name="numero" placeholder="N&uacute;mero">
      </div>            
      <div class="form-group">
        <label for="id_integrante">Integrante:</label>
          <select id="id_integrante" name="id_integrante" class="form-control">
            <option>Selecciona</option>
            <option>001</option>
            <option>002</option>                    
          </select>
      </div>           
      <div class="form-group">
        <label for="id_posicion">Posicion:</label>
          <select id="id_posicion" name="id_posicion" class="form-control">
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
