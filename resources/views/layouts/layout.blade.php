<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>JAFA - {{ ucfirst(Route::currentRouteName()) }}</title>
		
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">  <!-- Regular text -->
		<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400&display=swap" rel="stylesheet">  <!-- Navigation bar -->
		
		<!-- Styles -->
		<style>
			html, body {
				width: 100vw;
				height: 100vh;
				margin: 0px;
				padding: 0px;
				overflow-x: hidden;
				font-family: 'Roboto Mono', sans-serif;
			}
		</style>

		@yield('css')

		<link rel="stylesheet" href={{ URL::asset('css/header.css') }}>
		<link rel="stylesheet" href={{ URL::asset('css/layout.css') }}>
		<link rel="stylesheet" href={{ URL::asset('css/footer.css') }}>
    </head>
    <body>
		<header>
			<div id="header-logo"></div>
			<nav>
				<a href=#>Home</a>
				<a href=#>About</a>
				<a href=#>LINK</a>
				<a href=#>LINK</a>
			</nav>
			
			<div id="header-session">
				@if (false /* signed in */)
					<!-- TODO -->
				@else
					<a href='#'>Sign in</a>
					<a href='#'>Register</a>
				@endif
			</div>
			
		</header>

		@yield('content')

		<footer>
			<div>
				<div id="footer-logo"></div>
				<div id="footer-legal">&#169; 2020 JAFA, Cohen Wisbey,<br/>All Rights Reserved.</div>
			</div>
			<div>
				<ul>
					<li>Explore</li>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
				</ul>
			</div>
			<div>
				<ul>
					<li>Contact</li>
					<li><a href='#'>cohenjc17@gmail.com</a></li>
				</ul>
			</div>
			<div>
				<ul>
					<li>Follow</li>
					<li><a href="https://github.com/cohenjw">GitHub</a></li>
					<li><a href="https://www.linkedin.com/in/cohenjc/">LinkedIn</a></li>
				</ul>
			</div>
		</footer>
    </body>
</html>
