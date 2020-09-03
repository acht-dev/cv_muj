<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank_Account extends Model
{
    protected $table = 'bank_account';
    protected $primaryKey = 'bank_id';
    public $timestamps = false;
    protected $fillable = ['bank_comp_id', 'bank_name', 'bank_no_rek', 'bank_an', 'bank_branch', 'bank_create_date', 'bank_del_status'];
}
