<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;


    public $senderName;
    public $senderEmail;
    public $messageBody;

    public function __construct($senderName, $senderEmail, $messageBody)
    {
        $this->senderName = $senderName;
        $this->senderEmail = $senderEmail;
        $this->messageBody = $messageBody;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->senderEmail, $this->senderName),
            subject: 'Thankyou for contacting us, we will respond you ',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contactUs',
        );
    }
}
