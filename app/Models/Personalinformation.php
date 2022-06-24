<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personalinformation extends Model
{
    use HasFactory;

    protected $table = 'employee_personal_information';

    public $timestamps = true;

    protected $fillable = [
        'emp_id',
        'gender',
        'contact_number',
        'personal_mail_id',
        'persent_address',
        'perment_address',
        'aadhaar_number',
        'pan_number',
        'date_of_birth',
        'martial_status'
    ];
}
