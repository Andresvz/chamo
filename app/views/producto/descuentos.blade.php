@extends('index')

@section('content')
	<div class="container">
		<div class="row">
				<ul class="menu nav nav-tabs nav-justified">
							<li><a href="/">Tiendas</a></li>
							<li class="active"><a href="descuentos.html">Descuentos & Promociones</a></li>
				  			<li class="dropdown">
				                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categoria<i class="fa fa-angle-down"></i></a>
				                            <ul class="dropdown-menu">
				                                <li><a href="hombres.html">Hombre</a></li>
				                                <li><a href="mujeres.html">Mujeres</a></li>
				                                <li><a href="#">Niños</a></li>
				                                <li><a href="#">Baby</a></li>
				                            </ul>
				           	</li>
					 
							
								
				</ul>
					
				
		</div>
	</div>
	
	<section class="container">
		<div class="row">
		@foreach ($productos as $value)
			<div class="col-sm-3 col-lg-3">
				<article class="articulo">
				
				
						<div class="grid col-xs-12 col-sm-12">
							 <div class="imagen">
							 	<a href="#"><img src="{{$value->img_producto}}" alt="" style="width:200px;height:200px;"/></a>
							 </div>
							
							
							<div class="new">
								<img src="img/new.png">
							</div>
							 
							 <p><span class="strike">${{$value->precio_antes}}</span><span class="price">${{$value->precio_despues}}</span></p>
						     
						     <div class="botones  " align="center">
						     	<div class="details btn btn-danger">
						     		<span><a href="detalles.html">Detalles</a></span>
						     		
						     	</div>
						     	
						     	<div class="expire">
						     		<p>Solo queda 1 dia!</p>
						     	</div>
						     </div>
						     <div class="marca">
						     	<img src="">
						     </div>
						    
						</div>
						     

						     
					
			
				</article>
			</div>
		@endforeach	
		</div>
		
			
	</section>
@endsection