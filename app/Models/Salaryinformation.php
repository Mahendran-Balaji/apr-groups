<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salaryinformation extends Model
{
    use HasFactory;

    protected $table = 'employee_salary_information';

    public $timestamps = true;

    protected $fillable = [
        'emp_id',
        'account_holder_name',
        'account_bank_name',
        'account_bank_number',
        'bank_ifsc_code',
    ];
}
