<?php

namespace App\Http\Livewire\Admin\Register;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class RegisterIndex extends Component
{
    public $name;
    public $email;
    public $password;
    public $selectedRole;

    public function registerUser()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'selectedRole' => 'required',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        $user->assignRole($this->selectedRole);

        session()->flash('success', '¡Usuario registrado y rol asignado correctamente!');
        $this->emit('alertResgisterRol');
        $this->reset();
    }

    public function render()
    {
        $roles = Role::all();
        return view('livewire.admin.register.register-index', compact('roles'));
    }

}
