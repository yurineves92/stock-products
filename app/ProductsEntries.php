<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsEntries extends Model
{
    protected $fillable = ['amount','note','type_movement','date_entry','supplier_id','product_id'];

    public function supplier(){
        return $this->belongsTo('App\Suppliers');
    }
    public function product(){
        return $this->belongsTo('App\Products');
    }
}
