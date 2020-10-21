<!DOCTYPE html>
<html lang="en">

<!-- Head --> 
<?php include("layout/head.php"); ?>

<?php include("layout/nav.php"); ?>

<body id="page-top">

  <!-- About -->
  <section class="content-section" id="about">
    <div class="container">
      <div class="row"> 
          <div class="offset-md-3 col-md-6 p2 text-center">
            <img src="assets/img/buzon.png" width="50%;">
            <br>
            <br>
            <h4 class="alert-heading">Buzón de sugerencias</h4>
            <br>
          </div>
        </div>
        <div class="row">
          <div class="offset-md-3 col-md-6">
            <div class="alert alert-info" role="alert">
              <h4 class="alert-heading">Tu opinión nos interesa</h4>  
              <p>Hacé llegar tus recomendaciones, quejas, reclamos e incluso felicitaciones. Tu correo lo recibirá directamente la Oficina de Modernización e Innovación y lo pondrá en conocimiento con los responsables del área</p>
              <hr>
              <p class="mb-0">Tu opinion nos ayuda a mejorar.</p>
            </div>
            <br>
            <form action="enviarmail.php" method="post" class="alert alert-mmp">
              <h4>Completa el formulario con tus datos</h4>
              <br><br>               
              <div class="form-group">
                <label>Nombre y Apellido: </label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
              </div>
              <div class="form-group">
                <label>Asunto del mensaje: </label>
                <input type="text" class="form-control" id="asunto" name="asunto" required>
              </div>
              <div class="form-group">
                <label>Telefono de Contacto: </label>
                <input type="number" class="form-control" id="telefono" name="telefono" required>
              </div>              
              <div class="form-group">
                <label>Tu comentario: </label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
              </div>
              <button type="submit" class="btn btn-success btn-block">Enviá tu comentario</button>
            </form>
          </div>                                                                      
          <br>                   
        </div>
        <div class="row">
          <div class="col-md-6">
            <iframe src="https://preciosmaximos.argentina.gob.ar/api/products?pag=1&Provincia=Buenos%20Aires&regs=5000"></iframe>
          </div>
        </div>          
        </div>          
        </div>
      </div>
    </div>
  </section> 
  <div class="text-center">
    <a href="../index.php"><i class="fa fa-arrow-circle-left" style="font-size: 40px"></i></a>
  </div>

  <?php include("layout/footer.php"); ?>

  <?php include("layout/script.php"); ?>

</body>

</html>