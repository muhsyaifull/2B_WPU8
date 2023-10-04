<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('Login');
    }  
       
 
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('Home')
                        ->withSuccess('Signed in');
        }
   
        return redirect("login")->withSuccess('Login details are not valid');
    }
 
    public function registration()
    {
        return view('Register');
    }
       
 
    public function customRegistration(Request $request)
    {  
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('registration')
                ->withErrors($validator)
                ->withInput();
        }

        // Simpan data pengguna baru ke dalam database
        $user = User::create([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Setelah berhasil mendaftar, Anda dapat mengarahkan pengguna ke halaman lain (misalnya, halaman beranda)
        return redirect('/Home');
    }
    
     
    public function Homepage()
    {
        if(Auth::check()){
            return view('Home');
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
     
    public function signOut() {
        Session::flush();
        Auth::logout();
   
        return Redirect('Home');
    }
}
