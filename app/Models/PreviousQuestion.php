<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreviousQuestion extends Model
{
    use HasFactory;
    public $table = 'previous_questions';
    protected $fillable = [
        'bcsno','question','opt1','opt2','opt3','opt4','ans',
    ];
}
