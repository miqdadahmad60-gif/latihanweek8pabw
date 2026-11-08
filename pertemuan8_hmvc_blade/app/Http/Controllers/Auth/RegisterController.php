<?php
namespace App\Http\Controllers\Auth;
use App\Enums\UserRole; use App\Http\Controllers\Controller; use App\Http\Requests\Auth\RegisterRequest; use App\Models\User; use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller { public function create(){return view('auth.register');} public function store(RegisterRequest $request){$user=User::create([...$request->safe()->only(['name','email','password']),'role'=>UserRole::User]);Auth::login($user);$request->session()->regenerate();return redirect()->route('dashboard')->with('success','Registrasi berhasil. Selamat datang!');} }
