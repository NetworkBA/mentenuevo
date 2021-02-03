<html lang="{{ app()->getLocale() }}">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Syne:wght@700&display=swap" rel="stylesheet">

	<style type="text/css">
		body {
			font-family: 'Montserrat', sans-serif;
		}

		h1 {
			font-family: 'Syne', sans-serif;
		}

		p {
			text-align: justify;
		}

		p.vinculos2 {
			color: white;
		}

		.encabezado {
			font-family: 'Syne', sans-serif;
			color: #FC6F68;
		}

		.navbar-nav {
			color: white;
		}


		@media only screen and (max-width : 768px) {
			.navbar-collapse {}
		}

		@media screen and (max-width: 600px) {
			.section1 {
				display: none;
			}

		}

		@media screen and (min-width: 1023px) {
			.section1_mobile {
				display: none;
			}
		}
	</style>
	<title>Mente Cuatro Cero</title>
</head>
<body>
	<div id="app" class="content">
		<header-component></header-component>
		@yield('body')
		<footer-component></footer-component>
	</div>
	<script src="{{asset('js/app.js')}}"></script>
	<!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
