<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NonMembership extends Model
{
    protected $table = 'non_trainer_memberships';
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'user_id',
        'non_trainer_package_id',
        'startdate'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function package()
    {
        return $this->belongsTo(NonPackage::class, 'non_trainer_package_id');
    }

}