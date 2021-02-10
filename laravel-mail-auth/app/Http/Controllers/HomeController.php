<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Mail\SendMail;

class HomeController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }


  public function sendEmail(Request $request) {
    $data = $request -> validate([
      'mailText' => 'required|min:10'
    ]);
    // dd($data);
    $email = Auth::user() -> email;
    Mail::to($email)
      -> send(new SendMail($data['mailText']),
    );
    return redirect() -> back();
  }

  public function index()
  {
    // dd(Auth::user());
    // $utente = Auth::user() -> all();
    // $email = Auth::user() -> email;
    //
    // Mail::to($email)
    //     -> send(new SendMail('esempio di dato inviato', 'test2'),
    //   );

    return view('home');
  }
}
