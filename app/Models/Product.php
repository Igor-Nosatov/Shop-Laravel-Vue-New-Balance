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
        'weight',
        'style_code',
        'price',
        'feature_id',
        'width_id',
        'footwear_size_id',
        'fit_id',
        'model_id',
        'width_id',
        'gender_id',
        'category_id',
        'model_number_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string>
     */
    protected $casts = [
        'title'=> 'string',
        'description'=> 'string',
        'weight'=> 'string',
        'style_code'=> 'string',
        'price'=> 'integer',
        'feature_id'=> 'integer',
        'width_id'=> 'integer',
        'footwear_size_id'=> 'integer',
        'fit_id' => 'integer',
        'style_id' => 'integer',
        'gender_id' => 'integer',
        'category_id' => 'integer',
        'model_number_id' => 'integer',
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
     * @return BelongsTo
     */
    public function width()
    {
        return $this->belongsTo(Width::class);
    }

    /**
     * @return BelongsTo
     */
    public function footwearSize(): BelongsTo
    {
        return $this->belongsTo(FootwearSize::class);
    }

    /**
     * @return BelongsTo
     */
    public function fit(): BelongsTo
    {
        return $this->belongsTo(Fit::class);
    }

    /**
     * @return BelongsTo
     */
    public function style(): BelongsTo
    {
        return $this->belongsTo(Style::class);
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
     * @return BelongsTo
     */
    public function modelNumber(): BelongsTo
    {
        return $this->belongsTo(ModelNumber::class);
    }

    /**
     * @return BelongsTo
     */
    public function supportType(): BelongsTo
    {
        return $this->belongsTo(SupportType::class);
    }
}

