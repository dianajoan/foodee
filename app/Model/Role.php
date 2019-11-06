<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;
use App\User;

class Role extends EntrustRole
{
    protected $fillable = [
    	'name','display_name','description',
    ];
}
