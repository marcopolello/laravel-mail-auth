<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $stringa;
    public function __construct($esempio)
    {
      $this -> stringa = $esempio;
    }

    public function build()
    {
      return $this
      -> from('no-reply@laravel.com')
      -> view('mails.sendMail');
    }
}
