<!DOCTYPE html>
<html>
<head>
	<title>
      @yield('title', 'Bill Split Project3')
    </title>

		<meta charset='utf-8'>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="/css/master.css">

		@stack('head')

</head>
<body>

	<header class="text-center">
				<img
            src='/img/cell-billsplit.jpg'
						style='width:100px'
						align='center'
            alt='Project3 Logo'>
	</header>

	<section id='main'>
		@yield('content')
	</section>

	<footer class="text-center">
		<div>
			{{'*Required'}}
		</div>
		&copy; {{ date('Y') }}
	</footer>

@stack('body')

</body>
</html>
