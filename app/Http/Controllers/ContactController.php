<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactSendmail;

class ContactController extends Controller
{
    public function __construct()
    {        
        $this->middleware('verified');
    }
    
    public function index()
    {
        return view('contact.index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'content'  => 'required',
        ]);
        
        $inputs = $request->all();

        return view('contact.confirm', [
            'inputs' => $inputs,
        ]);
    }

    public function send(Request $request)
    {
        $action = $request->input('action');
        $inputs = $request->except('action');

        if($action !== 'submit'){
            return redirect()
                ->route('contact.index')
                ->withInput($inputs);

        } else {
            \Mail::to($inputs['email'])->send(new ContactSendmail($inputs));
            \Mail::to('gottue_kanzi0131@yahoo.co.jp')->send(new ContactSendmail($inputs));

            $request->session()->regenerateToken();

            return view('contact.thanks');
            
        }
    }

    public function privacy_policy()
    {
        return view('contact.privacy_policy');
    }

    public function question()
    {
        return view('contact.question');
    }

}
