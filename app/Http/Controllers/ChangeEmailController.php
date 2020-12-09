<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;

class ChangeEmailController extends Controller
{
    public function __construct()
    {        
        $this->middleware('verified');
    }

    public function edit()
    {
        $user = User::find(Auth::user()->id);
        
        return view('change_email.edit', ['user' => $user]);
    }
    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $rules = [
            'new_email' => ['required','email','unique:users']
        ];

        $this->validate($request, $rules);
        if($request->current_email == $user->email && Hash::check($request->password, $user->password)){
            $user->email = $request->new_email;
            $user->save();
            return redirect('posts/')->with('flash_message', 'メールアドレスが変更されました');
        }else{
            return redirect('change_email_edit/');
        }
    }
}
