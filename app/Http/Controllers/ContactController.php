<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormContactRequest;
use App\Mail\ContactMessageMailCreate;
use Illuminate\Support\Facades\Mail;
use App\Message;
use Redirect;
use Flashy;

class ContactController extends Controller
{
     public function create()
    {
    	return view('contacts.create');
    }

   public function store(FormContactRequest $request)
   {
   		$message = Message::create($request->only('nom','email','message'));

   		$mail= new ContactMessageMailCreate($message);
   		
   		Mail::to(config('laracarte.admin_laracarte_email'))->send($mail);
   		
   		Flashy::message('message envoyé ! nous vous repondrons dans le plus bref delais');

   		return Redirect::home();
   }
}
