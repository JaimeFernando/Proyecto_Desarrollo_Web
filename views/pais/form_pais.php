<?php 
 session_start();
  include ('../layouts/header.php'); 
?>
<div class="row">
	<div class="col-lg-4 col-lg-offset-4"><br/><br/><br/>
	<div><h2>Registro de Paises</h2></div><br/>		
    <form role="form" id="registro_pais" action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
      </div>                        
      <div class="form-group">
        <label for="bandera">Bandera:</label>
        <input type="file" class="form-control" name="bandera" id="bandera">
      </div>                 
      <div class="form-group">
        <label for="id_continente">Continente:</label>
          <select id="id_continente" name="id_continente" class="form-control">
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