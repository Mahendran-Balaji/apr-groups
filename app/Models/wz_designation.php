<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wz_designation extends Model
{
    use HasFactory;

    protected $table = 'wz_designation';

    protected $primaryKey = 'wz_id';

    public $timestamps = true;

    protected $fillable = [
        'designation',
        'visitor',
    ];



}
