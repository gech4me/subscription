<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendSubscriptionPostMail extends Mailable
{
    use Queueable, SerializesModels;

    public $post;
    public $email;


    public function __construct($post, $email)
    {
        $this->post = $post;
        $this->email = $email;
    }


    public function build()
    {
        return $this->subject("Subscription mail")->markdown('email.subscription.subscription-mail');
    }
}
