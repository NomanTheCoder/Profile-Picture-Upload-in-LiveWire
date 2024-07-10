<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;


class RegisterForm extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $password;
    public $profilePicture;

    public function create(){
       $validated= $this->validate([
            'name'=>'required|min:2|max:50',
            'email'=>'required|email',
            'password'=>'required|min:2',
            'profilePicture'=>'nullable|sometimes|image',
        ]);
        if($this->profilePicture){
          $validated['profilePicture']= $this->profilePicture->store('images','public');

        }

        User::create($validated);
        $this->resetForm(); 
        session()->flash('success','Registered Successfully!');

    }
    public function resetform(){
        $this->reset(['name','email','password','profilePicture']);
        $this->resetValidation();
    }
    public function render()
    {
        return view('livewire.register-form');
    }
}
