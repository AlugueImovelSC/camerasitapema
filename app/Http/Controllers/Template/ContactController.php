<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\Template\ContactMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function post(Request $request)
    {
        Mail::to(setting()->contact_email)
            ->send(new ContactMail($request->only(['nome', 'telefone', 'email', 'bairro'])));

        return redirect()
            ->back()
            ->withErrors('Email enviado com sucesso.');
    }
}