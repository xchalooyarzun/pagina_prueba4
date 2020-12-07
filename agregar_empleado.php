<?php
// Include config file
require_once "conexion.php";
 
// Define variables and initialize with empty values
$nombre = $direccion = $sueldo = "";
$nombre_err = $direccion_err = $sueldo_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validador nombre
    $input_nombre = trim($_POST["nombre"]);
    if(empty($input_nombre)){
        $nombre_err = "Por favor ingrese el nombre del empleado.";
    } elseif(!filter_var($input_nombre, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $nombre_err = "Por favor ingrese un nombre válido.";
    } else{
        $nombre = $input_nombre;
    }
    
    // Validador direccion
    $input_direccion = trim($_POST["direccion"]);
    if(empty($input_direccion)){
        $direccion_err = "Por favor ingrese una dirección.";     
    } else{
        $direccion = $input_direccion;
    }
    
    // Validador sueldo
    $input_sueldo = trim($_POST["sueldo"]);
    if(empty($input_sueldo)){
        $sueldo_err = "Por favor ingrese el monto del salario del empleado.";     
    } elseif(!ctype_digit($input_sueldo)){
        $sueldo_err = "Por favor ingrese un valor correcto y positivo.";
    } else{
        $sueldo = $input_sueldo;
    }
    
    // Check input errors before inserting in database
    if(empty($nombre_err) && empty($direccion_err) && empty($sueldo_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO empleado (nombre, direccion, sueldo) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_nombre, $param_direccion, $param_sueldo);
            
            // Set parameters
            $param_nombre = $nombre;
            $param_direccion = $direccion;
            $param_sueldo = $sueldo;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	
	<!-- Documentacion Templated -->
		<title>xXxGonzaloWeb1xXx</title>
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
	
    <title>Agregar </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2><p style="color: blue;">Agregar Trabajador</h2></p>
                    </div>
                    <label><p style="color: white;">Favor Completar el siguiente formulario, para agregar el Trabajador.</p></label>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($nombre_err)) ? 'has-error' : ''; ?>">
                            <!-- Intervencion de color Gonzalo Oyarzun -->
                            <label><p style="color: white;">Nombre:</p></label>
                            <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>">
                            <span class="help-block"><?php echo $nombre_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($direccion_err)) ? 'has-error' : ''; ?>">
                           <!-- Intervencion de color Gonzalo Oyarzun -->
                            <label><p style="color: white;">Dirección:</p></label>
                            <textarea name="direccion" class="form-control"><?php echo $direccion; ?></textarea>
                            <span class="help-block"><?php echo $direccion_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($sueldo_err)) ? 'has-error' : ''; ?>">
                            <label><p style="color: white;">Sueldo:</p></label>
                            <input type="text" name="sueldo" class="form-control" value="<?php echo $sueldo; ?>">
                            <span class="help-block"><?php echo $sueldo_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Agregar">
                        <a href="index.php" class="btn btn-default">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
<p></p>


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