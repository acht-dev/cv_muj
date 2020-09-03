<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    protected $primaryKey = 'comp_id';
    public $timestamps = false;
    protected $fillable = ['comp_name', 'comp_datail', 'comp_npwp', 'comp_address', 'comp_address2', 'comp_email', 'comp_phone', 'comp_create_date', 'comp_del_status'];
}
