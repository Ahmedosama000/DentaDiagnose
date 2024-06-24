<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [

        'patient_email',
        'center_email',
        'den_id',
    ];

    protected $table = 'request';

    public function user(){

        return $this->belongsTo(User::class,'den_id');
    }
}
