<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700&display=swap" rel="stylesheet">

    <style type="text/css">
	body{
		font-family: 'Montserrat', sans-serif;
	}
	h1{
		font-family: 'Syne',sans-serif;
	}
	p{
		text-align: justify;
	}
	p.vinculos2{
		color: white;
	}
	.encabezado{
		font-family: 'Syne',sans-serif;
		color: #FC6F68;
	}
	.navbar-nav{
		color: white;
	}

		
	@media only screen and (max-width : 768px) {
	    .navbar-collapse {
	  }
	}
	@media screen and (max-width: 600px) {
		.section1{
			display:none;
		}
		
	}
	@media screen and (min-width: 1023px){
		.section1_mobile{
			display:none;
		}
	}
    </style>
	<title>Mente Cuatro Cero</title>
	
</head>
<body oncontextmenu="return false">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4">
				<img src="/images/logo.svg" class="img-fluid "style="padding: 20px;">
			</div>
		</div>
	</div>
	
	
	<!-- Comienza header -->
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #77D0E8;">
		<div class="container" >
			<a class="navbar-brand" href="#"></a>
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
			<div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
				<ul class="navbar-nav">
				  <li class="nav-item">
				    <a class="nav-link menu" href="/">Inicio</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link menu" href="/perfiles">Perfiles</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link menu" href="/planes">Planes</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link menu" href="/contacto">Contacto</a>
				  </li>
				</ul>
				<ul class="navbar-nav">
					<li><a href="#" class="nav-link">Registro</a></li>
					<li><a href="#" class="nav-link">Iniciar Sesión</a></li>
				</ul>
				
			</div>
		</div>
	</nav>
	<!-- Termina Header header -->	
	

	@yield('body')

	<!-- COMIENZA FOOTER -->
	<div style="background-color: #333132;">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-6 align-self-center" style="padding-top: 50px; padding-bottom: 50px;">
					<div class="container">
						<img src="/images/logocompleto.svg" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-8 col-12">
					<div class="container d-flex justify-content-end h-100">
						<div class="row align-self-center">
							<div class="col">
								<p class="vinculos2">Redes Sociales</p>
								<a href="#"><i style="color:white" class="fa fa-2x fa-facebook-official"> </i></a>
								<a href="#"><i style="color:white" class="fa fa-2x fa-instagram"> </i></a>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>	
	</div>
	
	


	<!-- TERMINA FOOTER -->



	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>