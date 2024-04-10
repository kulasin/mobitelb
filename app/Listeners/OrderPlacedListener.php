<?php

namespace App\Listeners;

use App\Events\OrderPlaced;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class OrderPlacedListener implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(OrderPlaced $event)
    {
        // Broadcast the order data to the admin channel for real-time notification
        broadcast(new OrderPlaced($event->order))->to('admin-channel');
    }
}

