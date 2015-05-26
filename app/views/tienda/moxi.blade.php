@extends('index')

@section('content')
	<div class="container">
		<div class="row">
			<ul class="menu nav nav-tabs nav-justified">
							<li class="active"><a href="#">Tiendas</a></li>
							<li><a href="/descuentos">Descuentos & Promociones</a></li>
				  			<li class="dropdown">
				                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categoria<i class="fa fa-angle-down"></i></a>
				                            <ul class="dropdown-menu">
				                                <li><a href="hombres.html">Hombre</a></li>
				                                <li><a href="mujeres.html">Mujere</a></li>
				                                <li><a href="#">Niños</a></li>
				                                <li><a href="#">Baby</a></li>
				                            </ul>
				           	</li>
					 
							
								
				</ul>

		</div>		
	</div>

	
	
	<section class="container">

		<div class="row">
		@foreach	($tiendas as $value)
	   	
			<div class="col-sm-6">
				<article class="store animated flipInX">
				<div class="row">
					<div class="imagen col-sm-3">
						<img src="/{{$value->avatar}}">
					</div>

					

					<div class="detalles col-sm-9">
						
									<h2 class="tienda">
											{{$value->nombre}}
									</h2>
									<p class="direccion">
										{{$value->descripcion}}
									</p>
									<p class="telefono"><span class="glyphicon glyphicon-earphone"></span>{{$value->telefono}}</p>

									<p><a href="#">{{$value->horario}}</a></p>
						
						
						
					</div>

				</div>
				<div class="acciones">
						<ul class="nav nav-tabs nav-justified">
								<li><a href="Javascript:void(0);" data-toggle="modal" data-target="#myModal"><span class="ubicacion glyphicon glyphicon-map-marker"></span>Ubicacion</a></li>
								<!-- <li><a href=""><span class="comentario glyphicon glyphicon-comment"></span>Comentarios</a></li> -->
						</ul>
				</div>
					
		</article>

	</div>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ubicacion</h4>
      </div>
      <div class="modal-body">
        <iframe src="{{$value->ubicacion}}" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
      </div>
     
    </div>
  </div>
</div>
	@endforeach
</div>
	
</section>


@endsection