<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    protected $table = 'reservation';

    protected $fillable = [

        'name',
        'email_patient',
        'phone_patient',
        'age',
        'den_id',
        'rad_id',
        'message',
    ];
}
