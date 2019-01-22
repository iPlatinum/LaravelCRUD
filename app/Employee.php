<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = 'employee';

    //default id
    protected $primaryKey = 'employee_id';

    public $timestamps = false;
    //attribute
    protected $fillable = [
    	'employee_id', 
    	'employee_name', 
    	'employee_address',
    	'employee_phone_number'
    ];
}
