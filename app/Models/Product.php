<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'clothing_size_id',
        'gender_neutral_size_id',
        'fit_id',
        'model_id',
        'width_id',
        'gender_id',
        'category_id',
        'sub_category_id',
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
        'clothing_size_id'=> 'integer',
        'gender_neutral_size_id'=> 'integer',
        'fit_id' => 'integer',
        'style_id' => 'integer',
        'gender_id' => 'integer',
        'category_id' => 'integer',
        'sub_category_id' => 'integer',
    ];
    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function width()
    {
        return $this->belongsTo(Width::class);
    }
    public function footwearSize()
    {
        return $this->belongsTo(FootwearSize::class);
    }

    public function clothingSize()
    {
        return $this->belongsTo(ClothingSize::class);
    }

    public function genderNeutralSize()
    {
        return $this->belongsTo(GenderNeutralSize::class);
    }

    public function fit()
    {
        return $this->belongsTo(Fit::class);
    }
    public function style()
    {
        return $this->belongsTo(Style::class);
    }
    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}

