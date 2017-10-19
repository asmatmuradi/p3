<!DOCTYPE html>
<html>
<head>
	<title>
        @yield('title', 'Project3')
    </title>

	<meta charset='utf-8'>

</head>
<body>

	<header>
		<img
        src='https://cdn.dribbble.com/users/358115/screenshots/3194551/cell-billsplit.jpg'
        style='width:300px'
        alt='Project3 Logo'>
	</header>

	<section>
		@yield('content')
	</section>

	<footer>
		&copy; {{ date('Y') }}
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>



</body>
</html>
