<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Tienda extends Eloquent{
    
     use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    
    public function productos()
    {
        return $this->hasMany('Producto');
    }

  

}