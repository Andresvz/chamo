<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Producto extends Eloquent{
    
    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    
    public function categoria()
    {
        return $this->belongsTo('Categoria');
    }
     public function tienda()
    {
         return $this->belongsTo('Tienda','tienda_id');
    }
    


  

}