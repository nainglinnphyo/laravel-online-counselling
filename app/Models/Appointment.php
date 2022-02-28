<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable=[
        'user_id',
        'counsellor_id',
        'time'
    ];
    use HasFactory;
}
