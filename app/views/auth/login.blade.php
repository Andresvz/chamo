


<html class="no-js" lang="en" >

  <head>  	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="img/logotipo.png"> 
	<title>Login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link href="css/animate-custom.css" rel="stylesheet">
 
   
  </head>
    <body>
    	<!-- start Login box -->
    	<div class="container" id="login-block">
    		<div class="row">
			    <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
		
			       <div class="login-box clearfix animated flipInY">
			        	<div class="login-logo animated bounceInDown">
			        		<a href="#"><img src="img/logotipo1.png" alt="Company Logo" style="width:200px;height:100px;"/></a>
			        	</div> 
			        	<hr />

       {{ Form::open(array('url' => 'login')) }}
      
			        	<div class="login-form">
			        		{{-- Preguntamos si hay algÃºn mensaje de error y si hay lo mostramos  --}}
			        		                          @if(Session::has('mensaje_error'))
		        		                          <div class="alert alert-danger">{{ Session::get('mensaje_error') }}</div>
			        		                          @endif
			        		                          @if(Session::has('mensaje'))
			        		                          <div class="alert alert-success">{{ Session::get('mensaje') }}</div>
			        		                          @endif
			        		<form action="#" method="get"  >
						   		{{ Form::text('email', Input::old('correo'), array('class' => 'form-control', 'placeholder'=> 'Correo Electronico')); }}
						   		{{ Form::password('password', array('class' => 'form-control', 'placeholder'=> 'Contraseña')); }}
						   		{{ Form::submit('login', array('class' => 'btn btn-red	')) }}
						   		
						   		
						   		
						   		{{ Form::close() }}
							</form>	
							<div class="login-links"> 
					            
					            <br />
					            <a href="sign-up.html">¿No tienes cuenta? <strong>INICIA SESIÓN</strong>
					            </a>
							</div>      		
			        	</div> 			        	
			       </div>
			  	   	
			       <div class="social-login row">
			        		<div class="fb-login col-lg-6 col-md-12 animated flipInX">
			        			<a href="moxi.html" class="btn btn-facebook btn-block">Connet with <strong>Facebook</strong></a>
			        		</div>
			        		<div class="twit-login col-lg-6 col-md-12 animated flipInX">
			        			<a href="moxi.html" class="btn btn-twitter btn-block">Connet with <strong>Twitter</strong></a>
			        		</div>
			        </div>
			    </div>
			</div>
    	</div>
     
      	<!-- End Login box -->
     	<footer class="container">
     		<p id="footer-text"><small>Copyright &copy; 2015</small></p>
     	</footer>


       
</html>
