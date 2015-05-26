<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	function run()
	{
		Eloquent::unguard();

		 DB::table('usuarios')->delete();


        Usuario::create(array(
            'id' => 1,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'nombre' => 'chamo',
            'apellido'=> 'abner',
            'telefono'=> 123456,
            
        ));

        DB::table('tiendas')->delete();

        Tienda::create(array(
            
            'correo' => 'abner@totto.com',
            'password' => Hash::make('654321'),
            'nombre' => 'totto',
            'avatar' => '\img\totto.jpg',
            'telefono'=> 12234243,
            'direccion'=> 'por el centro',
            'descripcion'=> 'tienda de bolsos y ropa en general',
            'ubicacion' => 'https://www.google.com/maps/place/Totto/@11.24071,-74.212893,17z/data=!3m1!4b1!4m2!3m1!1s0x8ef4f57c649fe6d3:0x55b421c14ab1c4ae',
            
        ));

        Tienda::create(array(
            
            'correo' => 'pepe@nike.com',
            'password' => Hash::make('1234'),
            'nombre' => 'Nike',
   			'avatar' => '\img\nike.png',
            'telefono'=> 123234324,
            'direccion'=> 'buena vista local 202',
            'descripcion'=> 'tienda de zapatos , ropa etc',
            'ubicacion' => 'https://www.google.com/maps/place/V%C3%8DA+BALOTO+EXITO+BUENA+VISTA+SANTAMARTA+SANTA+MARTA/@11.227856,-74.177244,17z/data=!3m1!4b1!4m2!3m1!1s0x8ef4f5a9794f1bff:0x43924d9d56db8af5',
            
        ));


        DB::table('categorias')->delete();


        Categoria::create(array(
            'id' => 1,
            'nombre' => 'Hombres' ,
            
        ));

        Categoria::create(array(
            'id' => 2,
            'nombre' => 'Mujeres',
            
        ));

        Categoria::create(array(
            'id' => 3,
            'nombre' => 'Niños',
            
        ));
        Categoria::create(array(
            'id' => 4,
            'nombre' => 'Baby',
            
        ));


        DB::table('productos')->delete();

        Producto::create(array(
            'id' => 1,
            'categoria_id' => 1,
            'tienda_id' => 1,
            'titulo' => 'Camisa manga  larga',
            'descripcion' => 'camisa manga larg bonita',
            'img_producto' => 'img/camisa.jpg',
            'precio_antes' => 480000,
            'precio_despues' => 20000,

            
            
        ));

        Producto::create(array(
            'id' => 2,
            'categoria_id' => 2,
            'tienda_id' => 1,
            'titulo' => 'Bolso Rosado',
            'descripcion' => 'Bolso rosado  bonito, bastante simpatico',
            'img_producto' => 'img/bolso1.jpg',
            'precio_antes' => 64000,
            'precio_despues' => 10000,
            
            
            
        ));

        Producto::create(array(
            'id' => 3,
            'categoria_id' => 3,
            'tienda_id' => 2,
            'titulo' => 'Camisita',
            'descripcion' => 'camisita  bonita, bastante simpatica',
            'img_producto' => 'img/camisita.jpg',
            'precio_antes' => 100000,
            'precio_despues' => 15000,
            
            
            
        ));
        Producto::create(array(
            'id' => 4,
            'categoria_id' => 4,
            'tienda_id' => 2,
            'titulo' => 'Trajesito',
            'descripcion' => 'trajesito  bonito, bastante simpatico',
            'img_producto' => 'img/trajesito.jpg',
            'precio_antes' => 90000,
            'precio_despues' => 5000,
            
            
            
        ));



	}

}
