<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rent extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'rents';

    protected $fillable = [
        'rent_hours',
        'startdate',
    ];
}