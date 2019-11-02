<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReleaseMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->user_email = $data['user_email'];
        $this->ticket_number = $data['ticket_number'];
        $this->date_out = $data['date_out'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.ReleaseEmail')
                    ->with([
                      'ticket_number' => $this->ticket_number,
                      'user_email' => $this->user_email,
                      'date_out' => $this->date_out,

                ]);
    }
}
