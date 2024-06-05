<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'contact',
        'membership_id',
        'startdate'
    ];

    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }
}
