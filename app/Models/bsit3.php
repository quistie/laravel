<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bsit3 extends Model
{
    use HasFactory;
    protected $table = 'bsit3';

    protected $fillable = [
        'name',
        'address',
        'age',
    ];
}
