<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;

class ApplyNowMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailData = [];
    public $cv;
    public $passport;
    public $photo;

    public function __construct(array $data, $cv, $photo, $passport)
    {
        $this->mailData = $data;
        $this->cv = $cv;
        $this->photo = $photo;
        $this->passport = $passport;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->mailData["email"], $this->mailData["userName"]),
            subject: 'We are very thankyoul to know you choose us to guide you through your career. We will respond you soon',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.applyNow',
            with: [
                'mailData' => $this->mailData,
            ]
        );
    }

    public function attachments(): array
    {
        $attachments = [];

        if ($this->cv) {
            $attachments[] = Attachment::fromPath($this->cv->getRealPath())
                ->as("CV.pdf")
                ->withMime($this->cv->getMimeType());
        }

        if ($this->photo) {
            $attachments[] = Attachment::fromPath($this->photo->getRealPath())
                ->as("Photo")
                ->withMime($this->photo->getMimeType());
        }

        if ($this->passport) {
            $attachments[] = Attachment::fromPath($this->passport->getRealPath())
                ->as('passport')
                ->withMime($this->passport->getMimeType());
        }

        return $attachments;
    }
}
