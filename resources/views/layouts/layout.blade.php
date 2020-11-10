<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>JAFA - {{ ucfirst(Route::currentRouteName()) }}</title>

		<!-- Styles -->
		@yield('css')
		<link rel="stylesheet" href={{ URL::asset('css/layout.css') }}>
    </head>
    <body>
		<header>
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
