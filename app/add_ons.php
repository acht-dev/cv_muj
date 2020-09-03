<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class add_ons extends Model
{
    protected $table = "add_ons";
    protected $primaryKey = 'add_ons_id';
    public $timestamps = false;
    protected $fillable = ['add_ons_name', 'add_ons_sale_price', 'add_ons_buy_price', 'add_ons_ket', 'add_ons_create_date', 'add_ons_update_date', 'add_ons_del_status'];
}
