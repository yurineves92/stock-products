<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsOutputs extends Model
{
    protected $fillable = ['amount','note','type_movement','date_output','product_id','client_id'];

    public function client(){
        return $this->belongsTo('App\Clients');
    }
    public function product(){
        return $this->belongsTo('App\Products');
    }
}
