<?php

namespace App\Http\Controllers;

use App\Mail\MailTrap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
        Mail::to('spencer.s.mcleod@gmail.com')->send(new MailTrap());
    }
}
