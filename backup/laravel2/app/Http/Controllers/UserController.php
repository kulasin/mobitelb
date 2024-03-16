<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Add this line
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class UserController extends Controller
{

    public function account()
    {
        return view('user.account');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'phone' => 'required|string|max:20',
        ]);

        // Update the user's information
        $user->name = $request->input('name');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->zip = $request->input('postal_code');
        $user->phone = $request->input('phone');
        $user->save();

        $previousUrl = $request->header('referer');

        // Redirect back to the previous page with the success message
        return Redirect::to($previousUrl)->with('success', 'Podaci su uspješno ažurirani.');
    }

    

    public function orderHistory()
    { $user = auth()->user();
        $userRole = $user->role;
        if ($userRole === 'admin') {
            $userOrders = Order::orderByDesc('created_at')->get();
        } else {
            $userOrders = Order::where('user_id', $user->id)->orderByDesc('created_at')->get();
        }

        return view('user.orders', compact('userOrders'));
    }


    public function userList()
    { $user = auth()->user();
        $userRole = $user->role;
        if ($userRole === 'admin') {
            $userList = User::orderByDesc('created_at')->get();
        } else {
            $userList = User::orderByDesc('created_at')->get();
        }

        return view('user.users', compact('userList'));
    }

    public function orderDetails($orderId)
    {
        // Retrieve the order from the database based on the orderId
        $order = Order::find($orderId);
    
        // Check if the order exists and if the authenticated user is either an admin or the order belongs to them
        if (!$order || (auth()->user()->role !== 'admin' && $order->user_id !== auth()->user()->id)) {
            abort(404); // Or you can redirect to a custom error page
        }
    
        // Return the order details view with the order data
        return view('user.order', compact('order'));
    }

    public function updateStatus(Request $request, $orderId)
{
    // Retrieve the order from the database based on the orderId
    $order = Order::find($orderId);

    // Check if the order belongs to the authenticated user or if the user is an admin
    if (!$order || (auth()->user()->role !== 'admin' && $order->user_id !== auth()->user()->id)) {
        abort(404); // Or you can redirect to a custom error page
    }

    // Update the status of the order
    $order->status = $request->input('status');
    $order->save();

    // Redirect back to the user.orders view
    return redirect()->route('user.orders');
}
    
}