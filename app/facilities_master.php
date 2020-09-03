<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facilities_master extends Model
{
    protected $table = "facilities_master";
    protected $primaryKey = 'facilmast_id';
    public $timestamps = false;
    protected $fillable = ['facilmast_name', 'facilmast_desc', 'facilmast_create_by', 'facilmast_update_date', 'facilmast_del_status'];
}
