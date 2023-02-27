<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Http\Request;
use App\Models\User;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public User $toUser;
    public array $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $toUser, array $request)
    {
        $this->toUser = $toUser;
        $this->request = $request;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address($this->request['email'], $this->request['last_name'] . ' ' . $this->request['first_name']),
            subject: 'お問い合わせがありました。',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'email.contact',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
