<?php

namespace App\Repositories\Shop\Checkout;

use Illuminate\Http\Request;

interface CheckoutRepositoryInterface
{
    public function addToCheckoutForm();
    public function deleteFromCheckoutForm();
}
