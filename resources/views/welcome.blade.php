<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Aplicações</title>

		<!-- Compiled and minified CSS and fonts -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	</head>
		
	<body class="antialiased">
		
	  	<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
			@if (Route::has('login'))
				<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
					@auth
						<a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
					@else
						<a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

						@if (Route::has('register'))
							<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
						@endif
					@endauth
				</div>
			@endif
		</div>

		<!-- Aplicações exclusivas para usuário cadastrados -->
		<div>
			@auth
				<span>Aplicação 1</span>
				<span>Aplicação 2</span>
				<span>Aplicação 3</span>
				<span>Aplicação 4</span>
			@endauth

			<!-- Aplicações aberts a todos os usuários -->
			<span>Aplicação 10</span>
			<span>Aplicação 20</span>
			<span>Aplicação 30</span>
			<span>Aplicação 40</span>

			<div class="row">
				<div class="col s12 m6 L3">
					<div class="card">
						<div class="card-content">
							<span class="card-title">Card Title</span>
						</div>

						<div class="card-content">
							<p>I am a very simple card. I am good at containing small bits of information.
				I am convenient because I require little markup to use effectively.</p>
						</div>

						<div class="card-action">
							<a href="#">This is a link</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	 </body>
</html>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


