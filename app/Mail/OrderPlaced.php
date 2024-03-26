<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueues;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Order; 

class OrderPlaced extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    public function __construct(\App\Models\Order $order) // Adjust the type hint
    {
        $this->order = $order;
    }

    public function build()
    {
        return $this->subject('Notifikacija za novu narudžbu!')->text('notification');
    }
}