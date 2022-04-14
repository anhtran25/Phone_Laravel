<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class LoginController extends Controller
{
    public function Loginindex()
    {
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate(
            [ 'email'=>'required',
            'password'=>'required',
            
            ],[
            'email.required'=>'Email không Được Để Trống',
            'password.required'=>'Password không Được Để Trống'
           
            ]
        );
        $email= $request->email;
        $password=$request->password;


        if (Auth::attempt(['email'=>$email , 'password'=> $password ])){
             $request->session()->regenerate();

            return redirect()->route('productIndex');
        }
        else{
            return redirect()->route('login')->with('message ','Sai thông tin rồi ');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('homeIndex');
    }

    public function sigup()
    {
        
        return view('auth.signup');
        
    }
    public function storeUp(Request $request)
    {
        $userData = $request->validate([
            'name' => 'required|unique:users|max:255|min:6',
            'email' => 'required|email',
            'password' => 'required',
            
        ],
        [
            'name.required' => ' Khong duoc de trong ten',
            'name.max' => 'Ten khong duoc qua 255 ki tu',
            'name.min' => 'Ten phai nhieu hon 6 ki tu',
            'email.required' => 'Phai nhap email',
            'email.email' => 'Email phải đúng định dạng',
            'password.required' => 'Yeu cau nhap mat khau',
            

        ]
    );

        
        $user = new User();
        $user->fill($userData);
        $user->password=Hash::make($request->password);

        
        

        $user->save();

        return redirect()->route('login');
    }
}