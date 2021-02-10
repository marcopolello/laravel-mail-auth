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

  public function index()
  {
    // dd(Auth::user());
    $utente = Auth::user() -> all();
    $email = Auth::user() -> email;

    Mail::to($email)
        -> send(new SendMail());

    return view('home');
  }
}
