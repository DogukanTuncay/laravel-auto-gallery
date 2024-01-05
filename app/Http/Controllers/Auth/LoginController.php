<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\AnaSayfa;
use function PHPUnit\Framework\isNull;

class LoginController extends Controller
{
    public function show()
    {
        return view('front.login');
    }
    public function login(LoginRequest $request)
    {
        $username = $request->username;
        $password = $request->password;
        $remember = $request->remember;

        !is_null($remember) ? $remember = True: $remember = False;
        $user = User::where('username',$username)->first();
        if($user && Hash::check($password,$user->password)){
            Auth::login($user,$remember);
            return redirect()->route('admin.dashboard');
        }
        else{
            return redirect()->back()
            ->withErrors([
                'error' => 'Verdiğiniz bilgilerle eşleşen bir kullanıcı bulunamadı'])
            ->onlyInput('username','remember');
        }
    }
    public function login2(LoginRequest $request)
    {
        $username = $request->username;
        $password = $request->password;
        $remember = $request->remember;

        !is_null($remember) ? $remember = True: $remember = False;
        if(Auth::attempt(['username' => $username,'password' =>$password],$remember))
        {
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->back()
            ->withErrors([
                'error' => 'Verdiğiniz bilgilerle eşleşen bir kullanıcı bulunamadı'])
            ->onlyInput('username','remember');
        }

    }
    public function logout(Request $request)
    {
        if(Auth::check()){
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('index');
        }
    }
}
