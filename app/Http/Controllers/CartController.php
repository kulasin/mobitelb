<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Product; 
use App\Models\Order; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderPlaced;

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
    
        $total = $subtotal + 9.00; // Assuming shipping is always 8.00 KM
    
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
    
        $total = $subtotal + 9.00; 
    
        return view('cart.checkout', compact('cartproducts', 'categories', 'cartItems', 'subtotal', 'total'));
    }

    public function placeOrder(Request $request)
    {  
        // Retrieve the form data from the request
        $formData = $request->all();
    
        // Check if the user is logged in
        if (auth()->check()) {
            // If the user is logged in, use their information from the authenticated user
            $userId = auth()->user()->id;
            $name = auth()->user()->name;
            $address = auth()->user()->address;
            $city = auth()->user()->city;
            $postalCode = auth()->user()->zip;
            $phone = auth()->user()->phone;
        } else {
            // If the user is not logged in, use the information provided in the form
            $userId = null;
            $name = $formData['name'];
            $address = $formData['address'];
            $city = $formData['city'];
            $postalCode = $formData['postal_code'];
            $phone = $formData['phone'];
        }
    
        // Extract the products data from the session
        $cartItems = session()->get('cart', []);
    
        // Calculate subtotal, shipping cost, and total
        $subtotal = 0;
        foreach ($cartItems as $productId => $item) {
            $product = Product::find($productId);
            $subtotal += $product->price * $item['quantity'];
        }
        $shippingCost = 9.00;
        $total = $subtotal + $shippingCost;
    
        // Create the order record in the database
        $order = Order::create([
            'user_id' => $userId,
            'name' => $name,
            'address' => $address,
            'city' => $city,
            'postal_code' => $postalCode,
            'phone' => $phone,
            'subtotal' => $subtotal,
            'shipping_cost' => $shippingCost,
            'total' => $total,
            'newsletter' => true,
            'products' => $cartItems,
        ]);
    
        // Send email notification using your Mailable class
        Mail::to('kulasinn@gmail.com')->send(new OrderPlaced($order));
    
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
