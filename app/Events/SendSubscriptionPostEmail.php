<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendSubscriptionPostEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $post;
    public $email;

    public function __construct($post, $email)
    {
        $this->post = $post;
        $this->email = $email;
    }


    public function broadcastOn()
    {
        return [];
    }
}
