<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsOutputs extends Model
{
    protected $fillable = ['amount','note','type_document','date_output','supplier_id','client_id'];

    public function clients(){
        return $this->belongsTo('App\Clients');
    }
    public function products(){
        return $this->belongsTo('App\Products');
    }
}
