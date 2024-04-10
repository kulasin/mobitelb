<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OrderPlaced implements ShouldBroadcast
{
    use Dispatchable, SerializesModels;

    public $order;

    public function __construct(array $orderData)
    {
        $this->order = $orderData;
    }

    public function broadcastOn()
    {
        return new Channel('admin-channel');
    }

    public function broadcastWith()
    {
        return [
            'order' => $this->order,
        ];
    }
}
