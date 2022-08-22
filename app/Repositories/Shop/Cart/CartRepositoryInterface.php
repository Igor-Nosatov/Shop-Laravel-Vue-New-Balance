<?php

namespace App\Repositories\Shop\Cart;
use Illuminate\Http\Request;

interface CartRepositoryInterface
{
    public function addToCart();
    public function updateToCart();
    public function deleteFromCart();
}
