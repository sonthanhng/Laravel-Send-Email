<?php

namespace App\Http\Controllers;

use Log;
use Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index() {
    return view('home');
  }

  public function send() {
    Log::info("Request cycle without Queues started");
    Mail::send('email.welcome', ['data'=>'data'], function ($message) {
      $message->from('nguyenthanhson4796@gmail.com', 'Son Nguyen');
      $message->to('sonnguyen4796@gmail.com');
    });
    Log::info("Request cycle without Queues finished");
  }
}
