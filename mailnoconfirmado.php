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
            <img src="assets/img/buzon.png" width="70%;">
            <br>
            <br>
            <h4 class="alert-heading">Buzón de sugerencias</h4>
            <br>
          </div>
        </div>
        <div class="row">
          <div class="offset-md-3 col-md-6">
            <div class="alert alert-danger" role="alert">
              <h4 class="alert-heading">Tu mensaje no pudo ser enviado</h4>
              <p>Hubo algun problema de conexion o los datos ingresados no son correctos. Por favor intente nuevamente en unos minutos</p>
              <hr>
              <p class="mb-0">Muchas Gracias</p>
            </div>
            <br>
          </div>                                                                      
          <br>                   
        </div>          
        </div>          
        </div>
      </div>
    </div>
  </section> 
  <div class="text-center">
    <a href="index.php"><i class="fa fa-arrow-circle-left" style="font-size: 40px"></i></a>
  </div>

  <?php include("layout/footer.php"); ?>

  <?php include("layout/script.php"); ?>

</body>

</html>