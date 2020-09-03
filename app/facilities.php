<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facilities extends Model
{
    protected $table = "facilities";
    protected $primaryKey = 'facilities_id ';
    public $timestamps = false;
    protected $fillable = ['facilities_ref_id', 'facilities_prod_id', 'facilities_create_date', 'facilities_update_date', 'facilites_del_status'];
}
