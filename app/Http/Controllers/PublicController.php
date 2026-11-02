<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller 
{
    public function homepage()
    {
        return view('welcome');
    }

    public function about_us()
    {
        return view('about');
    }

    public function jedi_detail($id)
    {
        return view('jedi.detail', compact('id'));
    }

    public function contact()
    {
        return view('contacts'); 
    }

    public function contactUs(Request $request) 
    {
        $userData = [
            'user' => $request->input('user'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]; 

        Mail::to('admin@hackademy.it')->send(new ContactMail($userData)); 
        
        return redirect(route('homepage'))->with('emailSent', 'Email inviata con successo!');
    }
}