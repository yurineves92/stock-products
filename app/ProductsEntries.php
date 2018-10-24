<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsEntries extends Model
{
    protected $fillable = ['amount','note','type_document','date_entry','supplier_id','product_id'];

    public function suppliers(){
        return $this->belongsTo('App\Suppliers');
    }
    public function products(){
        return $this->belongsTo('App\Products');
    }
}
