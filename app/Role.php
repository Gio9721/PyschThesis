<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'role_name',
    ];

    public function users() {
        return $this->belongsTo( 'App\User');
   }
}
