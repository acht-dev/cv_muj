<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "user";
    protected $primaryKey = 'user_id';
    public $timestamps = false;
    protected $fillable = ['user_firstname', 'user_lastname', 'user_jointdate', 'user_nik', 'user_gender', 'user_phone', 'user_email', 'user_name', 'user_password', 'user_comp_id', 'user_role_id', 'user_posit_id', 'user_create_date', 'user_update_date', 'user_del_status'];
}
