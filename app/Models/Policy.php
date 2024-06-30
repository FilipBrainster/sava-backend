<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;  

class Policy extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'policy_number',
        'policy_type',
        'package',
        'num_of_persons',
        'insured_people',
        'start_date',
        'end_date',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
