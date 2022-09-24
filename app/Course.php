<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_name',
        'year',
        'school',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
