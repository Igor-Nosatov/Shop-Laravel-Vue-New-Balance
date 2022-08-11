<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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


    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
