<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table = 'courses';
    protected $fillable = [
        'courseNo',
        'crsDesc',
        'crsUnits',
        ];
        
    public function offerings(){
        return $this->hasMany(Offering::class);
    }
}