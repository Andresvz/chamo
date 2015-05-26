<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Categoria extends Eloquent{
    
    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    
    public function productos()
    {
        return $this->hasMany('Producto');
    }

  

}