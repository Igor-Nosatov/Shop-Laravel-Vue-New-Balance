<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Shop\GiftCard\GiftCardRepository;
use App\Repositories\Shop\GiftCard\GiftCardRepositoryInterface;
use App\Repositories\Shop\Cart\CartRepository;
use App\Repositories\Shop\Cart\CartRepositoryInterface;
use App\Repositories\Shop\Home\HomeRepository;
use App\Repositories\Shop\Home\HomeRepositoryInterface;
use App\Repositories\Shop\Product\ProductRepository;
use App\Repositories\Shop\Product\ProductRepositoryInterface;
use App\Repositories\Shop\Review\ReviewRepository;
use App\Repositories\Shop\Review\ReviewRepositoryInterface;
use App\Repositories\Shop\Store\StoreRepository;
use App\Repositories\Shop\Store\StoreRepositoryInterface;
use App\Repositories\Shop\Checkout\CheckoutRepository;
use App\Repositories\Shop\Checkout\CheckoutRepositoryInterface;
use App\Repositories\Account\Auth\AuthRepository;
use App\Repositories\Account\Auth\AuthRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(GiftCardRepositoryInterface::class, GiftCardRepository::class);
        $this->app->bind(CartRepositoryInterface::class, CartRepository::class);
        $this->app->bind(HomeRepositoryInterface::class, HomeRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(ReviewRepositoryInterface::class, ReviewRepository::class);
        $this->app->bind(StoreRepositoryInterface::class, StoreRepository::class);
        $this->app->bind(CheckoutRepositoryInterface::class, CheckoutRepository::class);
        $this->app->bind(AuthRepositoryInterface::class, AuthRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
