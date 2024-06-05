<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'member_packages';

    protected $fillable = [
        'packet_name',
        'price',
        'duration',
    ];
}
