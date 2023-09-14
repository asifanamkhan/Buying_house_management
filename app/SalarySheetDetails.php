<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalarySheetDetails extends Model
{
    protected $guarded= [];

    public function employee(){
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
