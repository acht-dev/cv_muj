<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'cust_id';
    public $timestamps = false;
    protected $fillable = ['cust_comp_id','cust_name','cust_address','cust_phone','cust_create_date','cust_update_date','cust_del_status'];
}
