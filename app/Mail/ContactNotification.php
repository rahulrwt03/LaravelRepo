<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactNotification extends Mailable
{
    use SerializesModels;

    public $subject;
    public $data;

    public function __construct($subject, $data)
    {
        $this->subject = $subject;
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject($this->subject)
                    ->view('contact')
                    ->with(['data' => $this->data]); // Pass $data to the view
    }
    
}
