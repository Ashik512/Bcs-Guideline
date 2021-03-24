<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectQuestion extends Model
{
    use HasFactory;

     protected $fillable = [
        'subject_id','question','opt1','opt2','opt3','opt4','ans',
    ];
}
