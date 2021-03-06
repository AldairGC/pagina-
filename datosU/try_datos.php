<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("location: login_register.html");
}
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>try-datos</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="../css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">    
    <!-- Responsive CSS -->
	<link rel="stylesheet" href="../css/responsive.css">
	
	<link rel="stylesheet" href="../css/datos.css">
	<link rel="icon" href="../img/icon.ico">
</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

   	<!-- LOADER -->
	   <div id="preloader">
            <div class="loader">
                <div class="box"></div>
                <div class="box"></div>
            </div>
        </div>
         <!--end loader -->

	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="#"><img src="../img/savenet1.png" alt="image" width="100px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
						<li><a href="#form"></a></li>
						<span style="color: white;">proporciona tus datos</span>
						<buttto class="shwit">
							<span><i class="fad fa-sun"></i></span>
							<span><i class="fad fa-moon"></i></span>
						</buttto>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->

	<!-- decripcion del proyecto-->
	<div id="abono" class="gallery-box" style="background: #f7f7f7;"> 
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<p style="color: red;">Datos incorrecto o ya registrados</p>
						<form action="../php/DatasUser.php" id="form" method="POST">
							<input id="userName" name="nombreU" type="text" placeholder="NOMBRE" required>
							<input id="userPw" name="Apaterno" type="text" placeholder="Apellido Paterno" required>
							<input id="userPw" name="Amaterno" type="text" placeholder="Apellido Materno" required>
							<input type="date" name="fechaN" value="31-03-2000">
							<input id="userPw" name="estadoN" type="text" placeholder="estado de nacimiento" required>
							<input id="userPw" name="curp" type="text" placeholder="curp" required>
							<input id="userPw" name="rfc" type="text" placeholder="rfc" required>
                			<input type="submit" class="btn" action="../php/DatasUser.php" value="Iniciar">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end abono-->
	
	<!-- Footer -->
	<footer style="position: fixed; @media(max-width: 732px){ position: inherit;}">
		<tr>
     		<td><a href="" target="_blank" ><img name="utpdir04" src="http://www.utpuebla.edu.mx/00imagenes/dir/utpdir04.png" width="50" alt="redes sociales"></a></td>
			<td><a href="" target="_blank"><img name="utpdir05" src="http://www.utpuebla.edu.mx/00imagenes/dir/utpdir05.png" width="50"  alt="redes sociales"></a></td>
			<td><a href="" target="_blank"><img name="utpdir06" src="http://www.utpuebla.edu.mx/00imagenes/dir/utpdir06.png" width="50"  alt="redes sociales"></a></td>
		  </tr>
	</footer>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.pogo-slider.min.js"></script> 
	<script src="../js/slider-index.js"></script>
	<script src="../js/smoothscroll.js"></script>
	<script src="../js/form-validator.min.js"></script>
    <script src="../js/contact-form-script.js"></script>
	<script src="../js/isotope.min.js"></script>
	<script src="../js/images-loded.min.js"></script>	
    <script src="../js/custom.js"></script>
</body>
</html>
