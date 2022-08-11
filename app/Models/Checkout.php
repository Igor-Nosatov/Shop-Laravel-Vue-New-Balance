<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'street',
        'state',
        'zip_code',
        'phone',
        'email',
        'cart_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string>
     */
    protected $casts = [
        'first_name' => 'string',
        'last_name' => 'string',
        'street' => 'string',
        'state' => 'string',
        'zip_code' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'cart_id' => 'integer',
    ];

    public function carts()
    {
        return $this->hasMany(cart::class);
    }
}
