<?php

namespace App\Models\ShopModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 *
 */
class Review extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'review_headline',
        'nickname',
        'comment',
        'overall_fit',
        'rating',
        'image',
        'location',
        'email',
        'policy_agree',
        'user_id',
        'product_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string>
     */
    protected $casts = [
        'review_headline' => 'string',
        'nickname' => 'string',
        'comment' => 'string',
        'overall_fit' => 'enum',
        'rating' => 'integer',
        'image' => 'string',
        'location' => 'string',
        'email' => 'string',
        'policy_agree' => 'boolean',
        'user_id' => 'integer',
        'product_id' => 'integer',
    ];


    /**
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
