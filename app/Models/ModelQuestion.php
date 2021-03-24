<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelQuestion extends Model
{
    use HasFactory;

    public $table = 'model_questions';
    protected $fillable = [
        'model_code','question','opt1','opt2','opt3','opt4','ans',
    ];
}
