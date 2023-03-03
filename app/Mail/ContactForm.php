<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $content;

    /**
     * Create a new message instance.
     *
     * @param string $name
     * @param string $email
     * @param string $content
     */
    public function __construct(string $name, string $email, string $content)
    {
        $this->name = $name;
        $this->email = $email;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)
            ->subject('New Contact Form Submission')
            ->view('emails.contact-form');
    }
}