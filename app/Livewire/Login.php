<?php

namespace App\Livewire;

use Livewire\Component;
use Auth;
class Login extends Component
{
public $email;
public $password;

public function login(){
    $logdetails=[
        'email'=>$this->email,
        'password'=>$this->password
    ];
    if(Auth::attempt($logdetails)){
        session()->flash('success', 'Login successful!');
        return redirect('/dashboard');
        

    }else{
        session()->flash('error','Invalid Credentials');

    }
}

    public function render()
    {
        return view('livewire.login');
    }
}
