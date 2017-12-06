<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomePageController extends Controller
{
    public function index(){
        return view ('index');
    }

    public function contact(){
        return view('contact');
    }

    public function postContact(Request $request){
        $this->validate($request, [
            'email'=>'required|email',
            'message'=>'min:10',
            'subject'=>'min:3'
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
    }

    public function about(){
        return view('about');
    }

    public function projects(){
        return view('projects');
    }
}
