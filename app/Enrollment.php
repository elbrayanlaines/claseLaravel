<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    //
    protected $table = 'enrollments';
    protected $fillable = [
        'offerNo',
        'stdNo',
        'enrGrade',
    ];
}
