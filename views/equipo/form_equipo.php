<?php 
 session_start();
  include ('../layouts/header.php'); 
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
              <select id="id_pais" name="id_pais" class="form-control">
                <option>Selecciona</option>
                <option>001</option>
                <option>002</option>                    
              </select>
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