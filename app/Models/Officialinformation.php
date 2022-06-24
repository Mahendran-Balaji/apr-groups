<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officialinformation extends Model
{
    use HasFactory;

    protected $table = 'employee_official_information';

    protected $primaryKey = 'emp_id';

    public $timestamps = true;

    protected $fillable = [
        'first_name',
        'last_name',
        'emp_designation',
        'joining_date',
        'offical_mail_id',
        'current_salary',
        'reporting_head'
    ];
}
