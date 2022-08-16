<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Image extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'path',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string>
     */
    protected $casts = [
        'path' => 'string',
    ];


    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

}
