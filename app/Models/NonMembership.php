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
        'member_id',
        'non_trainer_package_id',
        'startdate'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');
    }

    public function package()
    {
        return $this->belongsTo(NonPackage::class, 'non_trainer_package_id');
    }

}