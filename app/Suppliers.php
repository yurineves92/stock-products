<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    protected $fillable = ['name','email','phone','address','cnpj'];

    public function products_inputs(){
        return $this->hasMany('App\ProductsEntries');
    }
}
