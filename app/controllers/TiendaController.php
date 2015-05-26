<?php

class TiendaController extends BaseController {


    public function index() {

       
        $tiendas = Tienda::all();
       

        return View::make('tienda.moxi')
                        ->with('tiendas', $tiendas);
                        
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