<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['name','amount','min_stock','max_stock','category_id'];

    public function category(){
        return $this->belongsTo('App\Categories');
    }
}
