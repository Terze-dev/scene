<?php

namespace App\Http\Livewire;

use App\User;
use Auth;
use Livewire\Component;

class Login extends Component
{


    public $email = '';
    public $password = '';

    public function updateEmail() {
        $this->validateOnly('email', [
            'email' => 'required|email'
        ]);
    }

    public function loginUser() {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!Auth::attempt(['email' => $this->email, 'password' => $this->password])) { 
            $this->addError('email', 'Invalid email or password.');
            return; 
        };

        return redirect('/');

    }

    public function render()
    {
        return view('livewire.login');
    }
}
