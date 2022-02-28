<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counsellor extends Model
{
    protected $fillable = [
        'counsellor_name',
        'email',
        'password',
        'image',
        'counsellor_details'
    ];

    public function users(){
        return $this->belongsToMany(User::class,'appointments','counsellor_id','user_id')->withPivot('time');
    }
    use HasFactory;
}
