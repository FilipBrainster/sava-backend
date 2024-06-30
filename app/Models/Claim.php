<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'policy_id',
        'claim_number',
        'claim_date',
        'status',
        'description',
        'amount',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
