<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function __construct()
    {        
        $this->middleware('verified');
    }
    
    public function edit()
    {
        $user = User::find(Auth::user()->id);
        
        return view('change_password.edit', ['user' => $user]);
    }
    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $rules = [
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ];

        $this->validate($request, $rules);
        if($request->email == $user->email && Hash::check($request->current_password, $user->password)){
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect('posts/');
        }else{
            return redirect('change_password_edit/')->with('flash_message', 'パスワードが変更されました');
        }
    }
}
