<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offering extends Model
{
    //
    protected $table = 'offerings';
    protected $fillable = [
        'offerNo',
        'courseNo',
        'offTerm',
        'offYear',
        'offLocation',
        'offTime',
        'facNo',
        'offDays',
    ];
    
    public function course(){
        return $this->belongsTo(Course::class);
    }
}
