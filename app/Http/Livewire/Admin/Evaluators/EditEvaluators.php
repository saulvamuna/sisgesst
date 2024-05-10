<?php

namespace App\Http\Livewire\Admin\Evaluators;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class EditEvaluators extends Component
{
    public $open = false;
    public $user, $name, $email, $password, $permissions;
    public $selectedRole;
    public $selectedPermissions = [];
    public $roles;

    protected $rules = [
        'name' => 'required|regex:/^[a-zA-ZáéíóúüÜÁÉÍÓÚ\s]+$/|max:255',
        'email' => 'required|email',
        'password' => 'sometimes|min:8'
    ];

    public function mount($user)
    {
        if ($user) {
            $this->user = $user;
            $this->name = $user->name;
            $this->email = $user->email;
            $this->password = $user->password;


            $this->roles = Role::all();

            $this->permissions = Permission::all();

            $this->selectedRole = $user->getRoleNames()->first();
            $role = Role::findByName($this->selectedRole);
            $this->selectedPermissions = $role->permissions->pluck('id')->toArray();
        }
    }

    public function updateManager()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'email' => $this->email,
        ];

        // Verifica si se proporcionó una nueva contraseña
        if ($this->password) {
            $data['password'] = bcrypt($this->password);
        }

        $this->user->update($data);

        $this->user->syncRoles([$this->selectedRole]);
        $this->user->syncPermissions($this->selectedPermissions);

        $this->emit('render');
        $this->reset('open');
        $this->emit('alertEdit');
    }

    public function render()
    {
        return view('livewire.admin.evaluators.edit-evaluators');
    }
}
