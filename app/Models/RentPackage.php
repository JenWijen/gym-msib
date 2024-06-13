<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RentPackage extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'rent_packages';

    protected $fillable = [
        'field_name',
        'field_picture',
        'field_price',
    ];
}
