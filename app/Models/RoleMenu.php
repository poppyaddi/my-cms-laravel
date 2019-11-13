<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleMenu extends Model
{
    //
    protected $fillable = ['role_id', 'menu_id'];
    protected $table    = 'role_menu';
    public $timestamps = false;

}
