<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Budget App')</title>
	<meta charset='utf-8'>
    <link href="/css/app.css" type='text/css' rel='stylesheet'>
    <link href='/css/styles.css' type='text/css' rel='stylesheet'>
</head>
<body>

	<header>
        <h1 class='main_title'>Budget App</h1>
	</header>

	<section>
        @yield('content', 'This is the main page')
	</section>

	<footer>
	</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</body>
</html>
