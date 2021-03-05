<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="author" content="{{ autor }}">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?= $this->tag->getTitle() ?>
	<link rel="shortcut icon" href="{{ url('img/favicon.png') }} ?>">

	<!-- fontawesome -->
	<script src="https://kit.fontawesome.com/bcaa9c2716.js" crossorigin="anonymous"></script>

	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


	<!-- jquery-validate  -->
	{{ javascript_include("assets/jquery/jquery.validate.js") }}

	<!-- jquery-confirm  -->
	{{ stylesheet_link("assets/jquery-confirm-3.3.2/jquery-confirm.min.css") }}
	{{ javascript_include("assets/jquery-confirm-3.3.2\jquery-confirm.min.js") }}

	{# Personalizados para el proyecto #}
	{{ stylesheet_link("css/master.css") }}
	{{ stylesheet_link("css/tema-1.css") }}
	{{ javascript_include("js/helpers.js") }}

	<script type="text/javascript">
	const URL_APP = "{{ url_app }}"
	</script>
</head>
<body>

	<nav class="navbar fixed-top navbar-expand-lg">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<a class="navbar-brand" href="{{url ('/')}}"><?= NOMBRE_PROYECTO ?></a>
			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">PRUEBA DE CONOCIMIENTOS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">{{ autor }}</a>
				</li>
			</ul>

		</div>
	</nav>
