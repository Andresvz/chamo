<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Moxi</title>
	<link rel="stylesheet" type="text/css" href="css/moxi.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate-custom.css">
	<link rel="stylesheet" type="text/css" href="css/moxi.css">
    

</head>
<body id="body">

	<header>

		<div class="container">
			<div class="row">

				<div class=" logo col-xs-2 animated bounceInDown">
					<img src="img/logotipo1.png">		
				</div>
				

				<div class="social col-xs-8">
						<div class="lista animated bounceInDown">
							<span>Síguenos</span>
							<button class="facebook btn btn-primary fa fa-facebook-square fa-2x"></button>
							<button class="twitter btn btn-info fa fa-twitter fa-2x"></button>
							<button class="google btn btn-danger fa fa-google-plus fa-2x"></button>
						</div>
					
					   
				</div>

		                       
	
				<div class="avatar col-xs-2 animated bounceInDown">
					<img src="img/avatar.jpg">
					<p>{{Auth::user()->nombre;}}</p>
				</div>

			</div>
		</div>
		
	</header>
	
	
@yield('content')
	<footer>
	<div class="row">
		<h1>© 2015-Moxie</h1>
	</div>
</footer>

</body>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>	