<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>JAFA - {{ ucfirst(Route::currentRouteName()) }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
		<link rel="stylesheet" href={{ URL::asset('css/style.css') }}>
    </head>
    <body>
		<header>
			@if (Route::currentRouteName() === 'welcome')
				
			@else
				
			@endif
		</header>

		@yield('content')

		<footer>

		</footer>
    </body>
</html>
