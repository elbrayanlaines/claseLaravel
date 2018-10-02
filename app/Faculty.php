<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    //
    protected $table = 'faculties';
    protected $fillable = [
        'facNo',
        'facFirstName',
        'facLastName',
        'facCity',
        'facState',
        'facZipCode',
        'facRank',
        'facHireDate',
        'facSalary',
        'facSupervisor',
        'facDept',
    ];
    
    public function supervising(){
        return $this->hasMany('Faculty', 'facSupervisor','facNo');
    }
    
    public function supervisor(){
        return $this->belongsTo('Faculty', 'facSupervisor','facNo');
    }
}
