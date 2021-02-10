<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $string;
    // public $test;
    // public $test2;
    public function __construct($formText)
    {
      $this -> string = $formText;
      // $this -> test = 'ehila';
      // $this -> test2 = $string2;
    }

    public function build()
    {
      return $this
      -> from('no-reply@laravel.com')
      -> view('mails.sendMail');
    }
}
