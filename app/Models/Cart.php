<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quantity',
        'promo_code',
        'shipped_days',
        'product_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'quantity' => 'integer',
        'promo_code' => 'integer',
        'shipped_days' => 'string',
        'product_id' => 'integer',
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
