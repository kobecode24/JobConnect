<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'job_offer_id',
        'status',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function job_offers()
    {
        return $this->belongsTo(JobOffer::class);
    }
}
