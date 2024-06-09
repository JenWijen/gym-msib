<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NonPackage extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'non_trainer_packages';

    protected $fillable = [
        'package_name',
        'price',
        'duration',
    ];
}
