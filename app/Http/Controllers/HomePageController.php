<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomePageController extends Controller
{
    public function index(){
        $title = 'Calgary Web Developer';
        return view ('index')->with('title', $title);
    }

    public function contact(){
        $title = 'Contact';
        return view('contact')->with('title', $title);
    }

    public function postContact(Request $request){
        $this->validate($request, [
            'email'=>'required|email',
            'message'=>'min:1',
            'subject'=>'min:3',
            'g-recaptcha-response' => 'required|captcha'
        ]);
        $data = array(
            'email'=>$request->email,
            'subject'=>$request->subject,
            'bodyMessage'=>$request->message
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('spencer.s.mcleod@gmail.com');
            $message->subject($data['subject']);
        });
        $title = 'Thank You';
        return view('thankyou')->with('title', $title);
    }

    public function about(){
        $title = 'About';
        return view('about')->with('title', $title);
    }

    public function projects(){
        $title = 'Projects';
        return view('projects')->with('title', $title);
    }

    public function thankyou(){
      $title = 'Thank You';
      return view('thankyou')->with('title', $title);
    }
}
