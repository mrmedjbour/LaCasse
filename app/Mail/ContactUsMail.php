<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactUs;

    public function __construct($contactUs)
    {
        $this->contact = $contactUs;
    }

    public function build()
    {
        $c = $this->contact;
        return $this->view('emails.contactUsMail', compact('c'));
    }
}
