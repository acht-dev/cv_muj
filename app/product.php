<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "product";
    protected $primaryKey = 'product_id';
    public $timestamps = false;
    protected $fillable = ['product_name', 'product_sale_price', 'product_buy_price', 'product_create_date', 'product_update_date', 'product_del_status'];
}
