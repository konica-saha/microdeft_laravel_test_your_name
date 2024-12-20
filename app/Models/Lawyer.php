<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    use HasFactory;
    protected $table = 'lawyers';

    protected $fillable = [
        'name',
        'phone',
        'address',
        'years_of_experience'
    ];
}
