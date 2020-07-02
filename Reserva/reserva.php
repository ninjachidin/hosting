<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Reserva</title>
	<meta name="author" content="Carlos" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr-2.6.2.min.js"></script>


	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">Charros <em>Boletos</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="inicio.php">Inicio</a></li>
						<li><a href="reserva.php">Reserva</a></li>
						<li><a href="precios.php">Precios</a></li>
						<li><a href="contacto.php">Contactos</a></li>
						<li><a href="desconectar.php"><font color="black">Salir</font></a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>¡ Compra y Reserva !</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Reserva y compra de boletos Charros!!</h3>

											<form action="datos.php" method="POST" >
												<div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Tu nombre</label>
														<input type="text" name="nombre" id="fullname" class="form-control" required="">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="temporadas">Temporada</label>
														<select name="temporada" id="temporadas" class="form-control" required="">
															<option value="temporada1">Temporada 1</option>
															<option value="temporada2">Temporada 2</option>
															<option value="temporada3">Temporada 3</option>
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="zonas">Zona</label>
														<select name="zona" id="zonas" class="form-control" required="">
															<option value="Basica">Basica</option>
															<option value="Regular">Regular</option>
															<option value="VIP">VIP</option>

														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="filas">Fila</label>
														<select name="fila" id="filas" class="form-control" required="">
															<option value="A"> A </option>
															<option value="B"> B </option>
															<option value="C"> C </option>
															<option value="D"> D </option>
															<option value="E"> E </option>
															<option value="F"> F </option>
															<option value="G"> G </option>
															
															
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="numeros">Numero</label>
														<select name="numero" id="numeros" class="form-control" required="">
															<option value="1"> 1 </option>
															<option value="2"> 2 </option>
															<option value="3"> 3 </option>
															<option value="4"> 4 </option>
															<option value="5"> 5 </option>
															<option value="6"> 6 </option>
															<option value="7"> 7 </option>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Submit">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>


	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<script src="js/bootstrap-datepicker.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

