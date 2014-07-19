<?php 
 session_start();
  include ('../layouts/header.php'); 
?>
<div class="row">
	<div class="col-lg-4 col-lg-offset-4"><br/><br/><br/>
	<div><h2 align="center">Registro de Jugadores</h2></div><br/>		
    <form role="form" id="registro_jugador" action="" method="post">
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

<?php include ('../layouts/footer.php'); ?>