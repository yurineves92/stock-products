<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = ['name','email','phone','address','cpf'];

    public function products_outputs(){
        return $this->hasMany('App\ProductsOutputs');
    }
}
