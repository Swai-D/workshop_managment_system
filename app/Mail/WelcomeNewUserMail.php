<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeNewUserMail extends Mailable
{
    public $data;

    use Queueable, SerializesModels;
   
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->user_email = $data['user_email'];
        $this->ticket_number = $data['ticket_number'];

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.new-welcome')
                ->with([
                      'ticket_number' => $this->ticket_number,
                      'user_email' => $this->user_email,

                ]);
    }
}
