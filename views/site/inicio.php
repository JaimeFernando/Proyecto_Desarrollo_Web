<?php 
  session_start();
  include ('../layouts/header.php');
?>

	 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src="../img/campeon_Alemania.jpg" alt="First slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>¡¡¡Alemania Campeon!!!</h1>
                  <p>Alemania es ahora el Campeon Mundialista de Futbol...!!!<br/>
                        Felicidades Muchachos..!!!</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Another example headline.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>One more for good measure.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div><!-- /.carousel -->


          
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Mundial Brasil 2014</h>
        <p class="lead">La Copa Mundial de la FIFA Brasil 2014 fue la XX edición de la Copa Mundial de Fútbol. Este torneo se realizó en Brasil entre el 12 de junio y el 13 de julio de 2014, siendo la segunda vez que este certamen deportivo se realiza en dicho país, tras el campeonato de 1950.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Seguir leyendo ...</a></p>
      </div>
      
      <div class="jumbotron" align="center">
      <h2>Herramientas Utilizadas</h2>
      	<!-- Example row of columns -->
          <div class="row">
            <div class="col-lg-4">
              <h4>Boostrap 3.2</h4>
              <p><img src="../img/boostrap.png" height="75%" width="75%"></p><br/>
              <p><a class="btn btn-primary" href="#" role="button">VIsitar &raquo;</a></p>
            </div>
            <div class="col-lg-4">
              <h4>Boostrap Validator</h4>
              <p><img src="../img/boostrap_validator.png" height="75%" width="75%"></p><br/>
              <p><a class="btn btn-primary" href="#" role="button">VIsitar &raquo;</a></p>
            </div>
            <div class="col-lg-4">
              <h4>Time Picker Bootstrap 3</h4>
              <p><img src="../img/timepicker-for-twitter-bootstrap.jpg" height="75%" width="75%"></p><br/>
              <p><a class="btn btn-primary" href="#" role="button">VIsitar &raquo;</a></p>
            </div>
          </div>
      
      </div>

      <!-- Example row of columns -->
      <div class="row" align="center">
      <h1>Desarrolladores</h1><br/>
        <div class="col-lg-3">
        <img class="img-circle" src="../img/fernando.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Fernando</h2> 
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <img class="img-circle" src="../img/azucena.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Azucena</h2> 
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <img class="img-circle" src="../img/grecia.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Grecia</h2>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
        <img class="img-circle" src="../img/abraham.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Abraham</h2>
          
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

     
<?php include ('../layouts/footer.php'); ?>
