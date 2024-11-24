<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ActivateYourAccount extends Mailable
{
    use Queueable, SerializesModels;


    public $code;
    public $url;
    /**
     * Create a new message instance.
     */
    public function __construct($code)
    {
        //
        $this->code = $code;
        $this->url = route('user.activate', $code);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Activate Your Account',
        );
    }
    public function build(){
        return $this->from('rraya16@contact.com')
        ->markdown('emails.activate_user_account');
    }
    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
