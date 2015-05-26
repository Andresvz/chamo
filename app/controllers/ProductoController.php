<?php

class ProductoController extends BaseController {


    public function index() {

       
        $productos = Producto::all();
       

        return View::make('producto.descuentos')
                        ->with('productos', $productos);
                        
    }


    public function create() {
    
    }


    public function store() {
    	
    }


    public function show($id) {
        
    }

    public function edit($id) {
     
    }

  

    public function update($id) {
    
    }


    public function destroy($id) {
        
        
    }
    
    
}
