<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginPage extends Component
{
    public $username;
    public $password;
    public function render()
    {
        return view('livewire.login-page');
    }

    public function Login()
    {
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->intended('/dashboard');
        } else {
            return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }
    }
}