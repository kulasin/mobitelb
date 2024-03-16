<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Product; 
use App\Models\Order; 

class CartController extends Controller
{
    public function index()
    {
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
    
        return view('cart.index', compact('cartproducts', 'categories', 'cartItems', 'subtotal', 'total'));
    }
       

    public function addToCart(Request $request)
{
    $productId = $request->input('product_id');
    $quantity = $request->input('quantity', 1);

    $product = Product::find($productId);
    if (!$product) {
        // Product with the given ID was not found, handle the error accordingly
        return redirect()->back()->with('error', 'Product not found.');
    }

    $cartItems = session()->get('cart', []);
    if (isset($cartItems[$productId])) {
        $cartItems[$productId]['quantity'] += $quantity;
    } else {
        // Include product name and price in the cart item
        $cartItems[$productId] = [
            'quantity' => $quantity,
            'name' => $product->name,
            'price' => $product->price,
        ];
    }

    session()->put('cart', $cartItems);

    // Redirect back or to the cart page
    return redirect()->route('cart.index');
}


    public function removeFromCart(Request $request)
    {
        $productId = $request->input('product_id');

        $cartItems = session()->get('cart', []);
        unset($cartItems[$productId]);

        session()->put('cart', $cartItems);

        // Redirect back or to the cart page
        return redirect()->route('cart.index');
    }

    public function checkout()
    {
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
    
        return view('cart.checkout', compact('cartproducts', 'categories', 'cartItems', 'subtotal', 'total'));
    }

    public function placeOrder(Request $request)
    {
        // Retrieve the form data from the request
        $formData = $request->all();

        // Assuming you have the authenticated user, you can get the user ID like this:
        $userId = auth()->user()->id;

        // Extract the products data from the session
        $cartItems = session()->get('cart', []);

        // Calculate subtotal, shipping cost, and total
        $subtotal = 0;
        foreach ($cartItems as $productId => $item) {
            $product = Product::find($productId);
            $subtotal += $product->price * $item['quantity'];
        }
        $shippingCost = 7.00;
        $total = $subtotal + $shippingCost;

        // Create the order record in the database
        $order = Order::create([
            'user_id' => $userId,
            'name' => auth()->user()->name, // Assuming you have a name field in the user model
            'address' => auth()->user()->address, // Assuming you have an address field in the user model
            'city' => auth()->user()->city, // Assuming you have a city field in the user model
            'postal_code' => auth()->user()->zip, // Assuming you have a postal_code field in the user model
            'phone' => auth()->user()->phone, // Assuming you have a phone field in the user model
            'subtotal' => $subtotal,
            'shipping_cost' => $shippingCost,
            'total' => $total,
            'newsletter' => true, // Assuming you have a checkbox for newsletter and it's checked by default
            'products' => $cartItems,
        ]);

        // Clear the cart after placing the order
        session()->forget('cart');

        // Redirect to a thank you page or order confirmation page
        return redirect()->route('cart.confirm');
    }

    public function confirm()
    {   
        return view('cart.confirm');
    }
}
