<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
/**
 *
 */
class Product extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'title', 
        'description',
        'style_code',
        'price',
        'gender_id',
        'category_id',
        'support_type_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string>
     */
    protected $casts = [
        'title'=> 'string',
        'description'=> 'string',
        'style_code'=> 'string',
        'price' => 'integer',
        'gender_id' => 'integer',
        'category_id' => 'integer',
        'support_type_id' => 'integer',
    ];

    /**
     * @return BelongsToMany
     */
    public function features(): BelongsToMany
    {
        return $this->belongsToMany(Feature::class);
    }

    /**
     * @return HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    /**
     * @return HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
    /**
     * @return BelongsToMany
     */
    public function width(): BelongsToMany
    {
        return $this->belongsToMany(Width::class);
    }

    /**
     * @return BelongsToMany
     */
    public function footwearSizes(): BelongsToMany
    {
        return $this->belongsToMany(FootwearSize::class);
    }

    /**
     * @return BelongsTo
     */
    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class);
    }

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return HasMany
     */
    public function modelNumber(): HasMany
    {
        return $this->hasMany(ModelNumber::class);
    }

    /**
     * @return BelongsTo
     */
    public function supportType(): BelongsTo
    {
        return $this->belongsTo(SupportType::class);
    }
}

