<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiftCard extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'email', 
        'recipient_name',
        'recipient_email', 
        'message',
        'amount',
        'user_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string>
     */
    protected $casts = [
        'name' =>'string',
        'email' =>'string',
        'recipient_name' =>'string',
        'recipient_email' =>'string',
        'message' =>'string',
        'amount' =>'integer',
        'user_id' =>'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}



