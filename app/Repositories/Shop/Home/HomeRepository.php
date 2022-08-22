<?php

namespace App\Repositories\Shop\Home;

use App\Models\Shop\Category;
use App\Models\Shop\Gender;
use App\Models\Shop\Product;
use Illuminate\Http\Request;
use App\Repositories\Shop\Home\HomeRepositoryInterface;

class HomeRepository implements HomeRepositoryInterface
{
    public function getHomData()
    {
        $productDataForStartPage = [];

        $newest_products = [];
        $newest_products = [
            'male' => Product::where('gender_id', 1)
                ->orderBy('created_at', 'desc')
                ->take(4),
            'women' => Product::where('gender_id', 2)
                ->orderBy('created_at', 'desc')
                ->take(4),
            'kids' => Product::where('gender_id', 3)
                ->orderBy('created_at', 'desc')
                ->take(4)
        ];
        
        $gender_categories = [];
        $gender_categories = [
            'male' => Gender::where('id', 1)->first(),
            'women' => Gender::where('id', 2)->first(),
            'kids' => Gender::where('id', 3)->first()
        ];

        $best_price = [];
        $best_price = [
            'male' => Product::where('gender_id', 1)
                ->orderBy('price', 'desc')
                ->take(4),
            'women' => Product::where('gender_id', 2)
                ->orderBy('price', 'desc')
                ->take(4),
            'kids' => Product::where('gender_id', 3)
                ->orderBy('price', 'desc')
                ->take(4)
        ];

        $productDataForStartPage = [
            'newest_products' => $newest_products,
            'gender_categories' =>  $gender_categories,
            'best_price' => $best_price,
        ];

        return $productDataForStartPage;
    }
}
