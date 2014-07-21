<?php 
 session_start();
  include ('../layouts/header_simple.php'); 
?>
<div class="row">
	<div class="col-lg-4 col-lg-offset-4">
	<div><h2 align="center">Registro de Entrenandores</h2></div><br/>		
    <form role="form" id="registro_entrenador" action="" method="post">                   
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