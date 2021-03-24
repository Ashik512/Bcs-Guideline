<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mistake extends Model
{
    use HasFactory;
    protected $fillable = [
        'email','model_code','question','opt1','opt2','opt3','opt4','ans',
    ];
}
