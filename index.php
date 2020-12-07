<!DOCTYPE HTML>
<!--
	MegaCorp by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
	<meta charset="UTF-8">
    <title>xXxGonzaloWebxXx</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
	
	<!-- Documentacion Templated -->
		<title>MegaCorp by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		
		
	</head>
	<body class="homepage">

		<!-- Header -->
		<div id="header-wrapper">
		
        	<div id="header" class="container">
            
            	<div id="logo"><h1><a href="#">gonzaloCorp</a></h1></div>
              <!--  <nav id="nav">
                    <ul>
                        <li class="current_page_item"><a href="index.html">Homepage</a></li>
                        <li><a href="twocolumn1.html">Right Sidebar</a></li>
                        <li><a href="twocolumn2.html">Left Sidebar</a></li>
                        <li><a href="onecolumn.html">No Sidebar</a></li>
                    </ul>
                </nav>
                -->
            </div>
			
			<div id="banner">
				<div class="container">
					<div class="row">
						<section class="12u">
							<header>
								<h2>Ingreso Trabajadores JyG Cosntrucciónes</h2>
								<span class="byline" style="color: white";>Solución Propuesta para la problematica de una Empresa al querer implementar un sitio web encargado de realizar esta operacion en conjunto a una base de datos administrada por PHP La pagina pose un CRUD basico que me permite Ingresar, Actualizar, Eliminar, Mostrar Registros de empleados asi como tambien su dirección y sueldo por medio de Data Table</span>
							</header>
							<a href="#" class="button button-alt">Leer Mas</a>
						</section>
					</div>
				</div>
			</div>			

		</div>
		<!-- Header Ends Here -->

		<!-- Featured Area -->
			<div id="featured-wrapper">
			
				<div class="container">
					<div class="row double">
					
                        <section class="4u">
                        <header>
	                        <h2>Grafico</h2>
                        </header>
                            <span class="pennant"><span class="fa fa-apple"></span></span>
                            <p>Promedio de sueldo de trabajadores desarrrollados por un Grafico implementado en librerias Js</p>
                            <a href="#" class="button button-style1">Leer Mas</a>
                        </section>
                        <section class="4u">
                            <header>
	                            <h2>C.R.U.D</h2>
                            </header>
                            <span class="pennant"><span class="fa fa-rocket"></span></span>
                            <p>CREATE, READ, UPDATE, DELETE por sus siglas en ingles la pagina cuenta con la tecnologia para poder Administrar  un registro de Trabajadores para una Empresa Constructora jyg.</p>
                            <a href="#" class="button button-style1">Leer Mas</a>
                        </section>
                        <section class="4u">
                            <header>
	                            <h2>Tecnologia Jscript </h2>
                            </header>
                            <span class="pennant"><span class="fa fa-cogs"></span></span>
                            <p>JavaScript es un lenguaje de programación o de secuencias de comandos que te permite implementar funciones complejas en páginas web.</p>
                            <a href="#" class="button button-style1">Leer Mas</a>
                        </section>
					
					</div>
				</div>
				
			</div>
		
		
		<!-- Featured Ends Here -->

		<!-- Pagina -->

        <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Empleados</h2>
                        <a href="agregar_empleado.php" class="btn btn-success pull-right">Agregar nuevo Trabajador</a>
						
                    </div>
                    <?php
                    // Include config file
                    require_once "conexion.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM empleado";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Nombre</th>";
                                        echo "<th>Dirección</th>";
                                        echo "<th>Sueldo</th>";
                                        echo "<th>Acción</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['nombre'] . "</td>";
                                        echo "<td>" . $row['direccion'] . "</td>";
                                        echo "<td>" . $row['sueldo'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='mostrar_empleado.php?id=". $row['id'] ."' title='Ver' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='actualizar_empleado.php?id=". $row['id'] ."' title='Actualizar' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='eliminar_empleado.php?id=". $row['id'] ."' title='Borrar' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
		<!-- /Page -->

		<!-- Copyright -->
            <div id="copyright" class="container">
                Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
            </div>

            <?php	

    include("sql.php");
	$link=cnx();
?>
<?php
$consulta="SELECT nombre
, GROUP_CONCAT( sueldo SEPARATOR  ',' ) AS SUELDO
FROM empleado
GROUP BY nombre";

$ejecuta=mysqli_query($link,$consulta) or die (mysqli_error());
$fila=mysqli_fetch_array($ejecuta);

$x=0;

?>



<script type="text/javascript" >

$(function () {
    Highcharts.chart('container', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Promedio Anual Sueldos'
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril']
        },
        yAxis: {
            title: {
            text: 'Grafico Sueldos'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [
					<?php do{  $x++; ?>
				{
					name:'<?php echo $fila["nombre"]?>',
					data:[<?php echo $fila["SUELDO"]?>]
				<?php if($x==4) { ?>
					}
					<?php }else{?>
					},
					<?php }?>
			
			<?php  } while($fila=mysqli_fetch_array($ejecuta));  ?>
        ]
    });
});


</script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<script src="http://code.jquery.com/jquery-1.7.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
	</body>



    <!-- Footer FINAL DE LA PAG xXx -->
    <footer class="page-footer font-small mdb-color lighten-3 pt-4">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

      <!-- Content -->
      <h5  style="color: white;"class="font-weight-bold text-uppercase mb-4">GONZALO OYARZUN PANES </h5>
      <p style="color: white;">Información.</p>
      <p style="color: white;">Estudiante Carrera Analista Programador Inacap 2020.</p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

      <!-- Links -->
      <h5 style="color: white;" class="font-weight-bold text-uppercase mb-4">About</h5>

      <ul class="list-unstyled">
        <li>
          <p>
            <a href="#!">PROJECTS</a>
          </p>
        </li>
        <li>
          <p>
            <a href="#!">ABOUT US</a>
          </p>
        </li>
        <li>
          <p>
            <a href="#!">BLOG</a>
          </p>
        </li>
        <li>
          <p>
            <a href="#!">AWARDS</a>
          </p>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

      <!-- Contact details -->
      <h5 style="color: white;" class="font-weight-bold text-uppercase mb-4">Direccion</h5>

      <ul class="list-unstyled">
        <li>
          <p>
            <i style="color: white;" class="fas fa-home mr-3"></i> <p style="color: white;">Estacion los Álamos, NY 3450, PTE</p>
        </li>
        <li>
          <p>
            <i style="color: white;" class="fas fa-envelope mr-3"></i> <p style="color: white;"> gonzalo.oyarzun04@inacapmail.cl</p>
        </li>
        <li>
          <p>
            <i style="color: white;" class="fas fa-phone mr-3"></i> <p style="color: white;"> + 569 4156 98 84  </p>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

      <!-- Social buttons -->
      <h5 class="font-weight-bold text-uppercase mb-4" style="color: white;">Follow Us</h5>
      


    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
</html>