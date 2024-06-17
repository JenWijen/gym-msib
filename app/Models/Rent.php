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
        'user_id',
        'rent_package_id',
        'rent_hours',
        'startdate',
       
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function rpackage()
    {
        return $this->belongsTo(RentPackage::class, 'rent_package_id');
    }
}
