<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTRO DE VIVIENDAS</title>
    <meta name="description" content="Departamento de informatica del CDP Jose Cabrera">
    <meta name="keywords" content="Grado superior, Desarrollo de aplicaciones web, Instituto, Informatica">
    <meta name="author" content="Angel Varela Pruaño">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css"  href="css/style2.css">


    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">





  </head>
  <body>

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="index.html"><img src="img/logo.jp" alt="viviendas.com" style="color:black"></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <!--- Menu -->
              <li><a href="index.html" class="page-scroll">Home</a></li>

              <li><a href="viviendas.php" class="page-scroll">Viviendas</a></li>
              <li><a href="registro.html" class="page-scroll">Registro</a></li>
              <li><a href="contacto.html" class="page-scroll">Contacto</a></li>
          </ul><!--- End Menu -->
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
    </nav>








    <?php
    $direccion=$construccion=$fecha=$fotografia=$buscar="";
    $direccionErr=$construccionErr=$fechaErr=$fotografiaErr=$buscarErr="";

    require_once('biblioteca/conexion.php');
    $conexion=mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME) or die("Problemas con la conexión");


      mysqli_set_charset($conexion,"utf8");
if(!isset($_REQUEST['busqueda'])){

  $registros=mysqli_query($conexion,"select id,direccion,superficie,construccion,foto from viviendas") or
    die("Problemas en el select:".mysqli_error($conexion));

}else{
  $registros=mysqli_query($conexion,"select id,direccion,superficie,construccion,foto from viviendas where direccion like '%".$_REQUEST['busqueda']."%'") or
    die("Problemas en el select:".mysqli_error($conexion));
}


    ?>



    <!-- About Us Section -->

    <div id="cta">
        <div class="container text-center">
      <div class="row text-center">
          <div class="col-md-8 col-md-offset-2">
              <div class="section-title">
                  <h2 style="color:white;">Viviendas registradas</h2>
                  <hr>
              </div>
              <p style="color:white;">Estas son algunas de nuestras viviendas registradas, pincha en ellas para ver mas informacion de las mismas. Y si  quieres registrar la tuya <a href="registro.html" style="color:rgb(187, 32, 32);">registrala</a> y podras verla en nuestro registro de viviendas.</p>






          </div>
<div id="contact">
<div class="container">

          <form class="form-horizontal"   action="viviendas.php" method="post" style="width:100%">
<br>
            <div class="form-group">


          <input  class="form-control" type="text" name="busqueda"  placeholder="Filtrar por situacion" style="display:inline;width:75%;margin-left:7.5%"  title="Indique el contenido a buscar"/>

          <button class='btn send-btn' type="submit" name="buscar" style=" float:right; width:10%;margin-top:0%; background-color:#C59A6D;margin-right:7.5%"  id="buscar"><span class="glyphicon glyphicon-search" ></span></button>


</div>
          </form>

</div>
</div>


      </div>
      <?php
          while ($reg = mysqli_fetch_array($registros)){
      ?>
            <div class="col-md-3 bg-primary no-padding teambox"style="background-color:rgb(187, 32, 32);padding:0;">
            <div class="team-thumb overlay-image view-overlay" >
              <?php echo "<img src='".$reg['foto']."'style='width:100%;class='img-responsive'>";?>

              <div class="mask team_quote">
                <div class="port-zoom-link">
                  <p>
                    <?php  echo $reg['direccion']; ?>
                    <?php  echo "<br><br>Superficie ".$reg['superficie']; ?>
                  </p>
                </div>
              </div>
            </div>
            <h2><?php  echo "Vivienda ".$reg['id']; ?></h2>
            <p>
               <?php  echo "Año construccion ".$reg['construccion']; ?>
            </p>

            <div class="team-social">

        <?php  echo "<a href='editar.php?id=".$reg['id']."'><i class='fa fa-pencil' title='Editar'></i></a>" ?>
        <?php  echo "<a href='borrar.php?id=".$reg['id']."'><i class='fa fa-remove' title='Borrar'></i></a>" ?>
            


            </div>
            </div>
      <?php
          }
      ?>
    </div>
    </div>





            <div class="text-center">
                <a href="#home" class="page-scroll down-btn">
                    <span class="fa fa-angle-down"></span>
                </a>
            </div>
<br>
        </div>
    </div>

        <!-- Testimonial Section -->

    <!-- Contact Section -->
    <nav id="footer" >
        <div class="container">
          <hr>


          <ul class="social">
              <li><a href="#"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
              <li><a href="#"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
            </ul>
<br><br>
             <div class="pull-left">
                <p>2018 © Angel Varela Pruaño. All Rights Reserved. Coded & Designed by <a href="http://www.agvarelapru.esy.es">Angel Varela</a></p>
            </div>
            <div class="pull-right">
                <a href="#home" class="page-scroll">Back to Top <span class="fa fa-angle-up"></span></a>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>






    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jasny-bootstrap.min.js"></script>



    <script src="js/owl.carousel.js"></script>
    <script src="js/typed.js"></script>



    <script>
      $(function(){
          $("#head-title").typed({
            strings: ["Departamento de informatica^1000", "Desarrollo de aplicaciones web^1000" ,"Marcamos la diferencia^1000"],
            typeSpeed: 100,
            loop: true,
            startDelay: 100
          });
      });




    </script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>
