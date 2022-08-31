<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Precios</title>
	<meta name="author" content="chiphysi" />


	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

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
					<div id="gtco-logo"><a href="index.html"><font color="black">SISTEMA <em>MINASA</em></font></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="inicio.php"><font color="black">Inicio</font></a></li>
						<li><a href="reserva.php"><font color="black">Reserva</font></a></li>
						<li><a href="precios.php"><font color="black">Precios</font></a></li>
						<li><a href="contacto.php"><font color="black">Contactos</font></a></li>
						<li><a href="desconectar.php"><font color="black">Salir</font></a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>SISTEMA MINASA</h2>
					<p>Elige el mejor destino para ti</p>
				</div>
			</div>
			<div class="row">


			<center><p>NUESTROS DESTINOS</p></center>

				<div class="table-responsive">          
					<table class="table">
						<thead>
						<tr>
							<th>#</th>
							<th>Agencia</th>
							<th>Destino</th>
							<th>Fecha</th>
							<th>Hora</th>
							<th>Precio</th>
						</tr>
						</thead>
						<tbody>

						<?php

                            require("conexion2.php");

                            //session_start();
                            //$ses = $_SESSION['id'];
                            //$us = $_SESSION['user'];

							
							$sql=("SELECT * FROM destinos");

							$query=mysqli_query($mysqli,$sql);
                            $num = 1;
                            

							while($arreglo=mysqli_fetch_array($query)){
							

                                echo "<tr>";
                                    echo "<td>$num</td>";
                                    echo "<td>$arreglo[0]</td>";
                                    echo "<td>$arreglo[1]</td>";
                                    echo "<td>$arreglo[2]</td>";
                                    echo "<td>$arreglo[3]</td>";
                                    echo "<td>$arreglo[4]</td>";
                                echo "</tr>";
                                $num = $num + 1;
							}
															
						?>

						
						</tbody>
					</table>
				</div>


				<!--center><p>PAQUETE A COLOMBIA</p></center>
				<div class="col-md-4">
					<div class="price-box">
						<h2 class="pricing-plan">BASICO</h2>
						<div class="price"><sup class="currency">$</sup>250.000<small>/COP</small></div>
						<p>Plan Basico En Avión Pequeño</p>
						<hr>
						<ul class="pricing-info">
						
						</ul>
						<a href="reserva.php" class="btn btn-default btn-sm">Reservar</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="price-box">
						<h2 class="pricing-plan">REGULAR</h2>
						<div class="price"><sup class="currency">$</sup>500.000<small>/COP</small></div>
						<p>Plan Regular En Avión Mediano </p>
						<hr>
						<ul class="pricing-info">
							
						</ul>
						<a href="reserva.php" class="btn btn-default btn-sm">Reservar</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="price-box popular">
						<div class="popular-text">POPULAR</div>
						<h2 class="pricing-plan">VIP</h2>
						<div class="price"><sup class="currency">$</sup>1.000.000<small>/COP</small></div>
						<p>Plan Vip En Avión Grande</p>
						<hr>
						<ul class="pricing-info">
							
						</ul>
						<a href="reserva.php" class="btn btn-primary btn-sm">Reservar</a>
					</div>
				</div>
			</div>

			<br>
			<br>

					<div class="row">
						<center><p>PAQUETE A OTROS PAISES</p></center>
				<div class="col-md-4">
					<div class="price-box">
						<h2 class="pricing-plan">BASICO</h2>
						<div class="price"><sup class="currency">$</sup>600<small>/US</small></div>
						<p>Plan Basico En Avión Pequeño</p>
						<hr>
						<ul class="pricing-info">
						
						</ul>
						<a href="reserva.php" class="btn btn-default btn-sm">Reservar</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="price-box">
						<h2 class="pricing-plan">REGULAR</h2>
						<div class="price"><sup class="currency">$</sup>1000<small>/US</small></div>
						<p>Plan Regular En Avión Mediano </p>
						<hr>
						<ul class="pricing-info">
							
						</ul>
						<a href="reserva.php" class="btn btn-default btn-sm">Reservar</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="price-box popular">
						<div class="popular-text">POPULAR</div>
						<h2 class="pricing-plan">VIP</h2>
						<div class="price"><sup class="currency">$</sup>2500<small>/US</small></div>
						<p>Plan Vip En Avión Grande</p>
						<hr>
						<ul class="pricing-info">
							
						</ul>
						<a href="reserva.php" class="btn btn-primary btn-sm">Reservar</a>
					</div>
				</div-->
			</div>
		</div>
	</div>



	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2022</small> 
						<small class="block">SISTEMA RESERVAS TRANSPORTE TERRESTRE INTERPROVINCIAL <a href="https://www.facebook.com/terminalminasalapaz" target="_blank">Sistema Minasa</a></small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="https://www.facebook.com/terminalminasalapaz"><i class="icon-twitter"></i></a></li>
							<li><a href="https://www.facebook.com/terminalminasalapaz"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.facebook.com/terminalminasalapaz"><i class="icon-linkedin"></i></a></li>
							<li><a href="https://www.facebook.com/terminalminasalapaz"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>


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

