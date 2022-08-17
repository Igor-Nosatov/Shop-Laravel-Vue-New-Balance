<?php

namespace App\Models\ShopModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 *
 */
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

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}



