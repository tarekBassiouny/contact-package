<?php

namespace Tbassiouny\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->name = $request['name'];
        $this->email = $request['email'];
        $this->message = $request['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Hello there!')->markdown('contact::contact.email')->with(['name' => $this->name, 'email' => $this->email, 'message' => $this->message]);
    }
}
