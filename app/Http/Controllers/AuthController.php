<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   public function Login(Request $request){
    $email = $request->input('email');
    $password = $request->input('password');
    
    $user = User::where('email', $email)->first();
    if($user){
        if($user->password == $password){
            session(['user_id' => $user->id]);
            // return redirect()->route('homepage');
            return redirect()->route('homepage', ['id' => $user->id]);
            // return redirect()->route('profil.show', ['id' => Session::get('user_id')]);
        } else {
            echo "email atau password salah";
        }
    } else {
        echo"user tidak ada";
    }
    
   }
   
   public function Logout(){
    Session::flush();
    return redirect()->route('login-page');
   }

   public function register(Request $request)
    {
        // Validasi data masukan dari formulir pendaftaran
        // $request->validate([
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:8',
        // ]);

        // Buat dan simpan pengguna baru ke dalam database
        $user = new User();
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        // $user->password = Hash::make($request->input('password'));
        $user->save();

        // Setel sesi untuk pengguna yang baru mendaftar
        session(['user_id' => $user->id]);

        // Redirect ke halaman profil pengguna
        return redirect()->route('homepage');
    }
}
