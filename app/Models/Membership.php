<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;
    protected $fillable = [
        'packet_name',
        'price',
        'duration',
        'trainer_id',
    ];
    public function trainer()
    {
        return $this->belongsTo(Trainer::class, 'trainer_id', 'id');
    }
}
