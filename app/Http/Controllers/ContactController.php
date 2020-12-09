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
        //バリデーション
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'content'  => 'required',
        ]);
        
        //フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();

        //入力内容確認ページのviewに変数を渡して表示
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
            //入力されたメールアドレスにメールを送信
            \Mail::to($inputs['email'])->send(new ContactSendmail($inputs));
            \Mail::to('gottue_kanzi0131@yahoo.co.jp')->send(new ContactSendmail($inputs));

            //再送信を防ぐためにトークンを再発行
            $request->session()->regenerateToken();

            //送信完了ページのviewを表示
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
