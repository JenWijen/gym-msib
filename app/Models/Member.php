<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact',
        'membership_id',
    ];

    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }
}
