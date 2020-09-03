<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = "position";
    protected $primaryKey = 'posit_id';
    public $timestamps = false;
    protected $fillable = ['posit_name','posit_del_status'];
}
