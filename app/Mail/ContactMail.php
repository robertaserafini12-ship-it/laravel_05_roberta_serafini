<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $userData;

    public function __construct($userData)
    {
        $this->userData = $userData;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('no-reply@hackademy.com', 'Hackademy'),
            subject: 'Mail di contatto',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.mail-body',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}