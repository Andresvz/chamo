<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BdCompleta extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	  Schema::create('profiles', function($table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('username');
            $table->biginteger('uid')->unsigned();
            $table->string('access_token');
            $table->string('access_token_secret');
            $table->timestamps();
        });
    
	Schema::create('usuarios', function($table) {
	 $table->engine = 'MyISAM';
	 $table->increments('id');
	 $table->string('password', 255);
	 $table->string('nombre', 255);
	 $table->string('apellido', 255);
	 $table->string('telefono', 255)->nullable();
	 $table->string('email', 255);
	 $table->string('remember_token', 100)->nullable();
	 $table->string('url_avatar', 255)->nullable();
	 $table->softDeletes();
	 $table->timestamps();
	 });

	Schema::create('tiendas', function($table) {
	 $table->engine = 'MyISAM';
	 $table->increments('id');
	 $table->string('password', 255);
	 $table->string('descripcion', 255);
	 $table->string('direccion', 255);
	 $table->string('nombre', 255);
	 $table->string('telefono', 255);
	 $table->string('correo', 255);
	 $table->string('ubicacion', 255);
	 $table->string('avatar', 255);
	 $table->string('horario', 50);

	 
	 $table->softDeletes();
	 $table->timestamps();
	 });

	Schema::create('productos', function($table) {
	 $table->engine = 'MyISAM';
	 $table->increments('id');
	 $table->integer('categoria_id')->unsigned();
	 $table->integer('tienda_id')->unsigned();
	 $table->string('titulo', 255);
	 $table->string('descripcion', 255);
	 $table->string('img_producto', 255);
	 $table->integer('precio_antes');
	 $table->integer('precio_despues');
	 $table->foreign('tienda_id')->references('id')->on('tiendas')->on_delete('set null');
	  $table->foreign('categoria_id')->references('id')->on('categoria')->on_delete('set null');
	 
	 
	 $table->softDeletes();
	 $table->timestamps();
	 });

	Schema::create('categorias', function($table) {
	 $table->engine = 'MyISAM';
	 $table->increments('id');
	 
	 $table->string('nombre', 255);
	
	 
	 
	 $table->softDeletes();
	 $table->timestamps();
	 });

	

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{	 Schema::drop('profiles');
		Schema::drop('usuarios');
		Schema::drop('tiendas');
		Schema::drop('productos');
		Schema::drop('categorias');
	}

}
