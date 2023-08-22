<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [

        'division',
        'name',
        'email',
        'phone_number',
        'request_type',
        'image',
        'date',
        'urgency',
        'description',

    ];


    protected $casts = [
        'request_type' => 'array',
    ];

    use HasFactory;
}
