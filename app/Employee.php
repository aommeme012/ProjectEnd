<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table= 'employees';
    protected $primaryKey= 'Emp_Id';

    protected $fillable = [
        'Fname',
        'Lname',
        'Address',
        'Tel',
        'Sex',
        'Username',
        'Password',
        'Emp_Status',
        'Dep_Id',
    ];
}
