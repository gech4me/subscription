<?php

namespace App\Listeners;


use App\Events\SendSubscriptionPostEmail;
use App\Mail\SendSubscriptionPostMail;
use Illuminate\Support\Facades\Mail;

class SendSubscriptionPostEmailFired
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function handle(SendSubscriptionPostEmail $event)
    {
        Mail::to($event->email)->queue(new SendSubscriptionPostMail($event->post));
    }
}
