<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Categories; // Assuming the Categories model namespace is 'App\Models\Categories'
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use App\Models\Product;

class AppServiceProvider extends ServiceProvider
{


    
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        setlocale(LC_NUMERIC, 'fr_FR');
        Paginator::useBootstrap();

             // Using a view composer to share categories data with the login view
             View::composer('auth.login', function ($view) {
                $categories = Categories::all(); // Fetch the categories from the database or any other data source
                $view->with('categories', $categories);
            });

              // Using a view composer to share categories data with the login view
              View::composer('auth.register', function ($view) {
                $categories = Categories::all(); // Fetch the categories from the database or any other data source
                $view->with('categories', $categories);
            });

            View::composer('*', function ($view) {
                $categories = Categories::all();
                $cartItems = session()->get('cart', []);
                
                // Load your products based on the cart items' product IDs from the database
                $productIds = array_keys($cartItems);
                $cartproducts = Product::whereIn('id', $productIds)->get();
        
                $subtotal = 0;
                foreach ($cartproducts as $product) {
                    $subtotal += $product->price * $cartItems[$product->id]['quantity'];
                }
            
                $total = $subtotal + 7.00; // Assuming shipping is always 7.00 KM
            
                $view->with(compact('cartproducts', 'categories', 'cartItems', 'subtotal', 'total'));
            });
    }
}
