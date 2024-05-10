<?php

namespace App\Http\Livewire\Admin\Roles;

use Spatie\Permission\Models\Role;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class CreateRol extends Component
{
    public $name;
    public $permissions, $permissionName = [], $permissionValue = [];

    protected $rules = [
        'name' => 'required|unique:roles,name',
        'permissions' => 'required',
    ];

    public function mount ()
    {
        $this->permissions = Permission::get();

        foreach($this->permissions as $permission){
           $this->permissionValue[] = $permission->id;
           $this->permissionName[] = $permission->name;
        }
    }

    public function createRole()
    {
        $this->validate();

        $role = Role::create(['name' => $this->name]);
        $role->syncPermissions($this->permissionValue);

        $this->reset(['name', 'permissions']);
    }

    public function render()
    {

        return view('livewire.admin.roles.create-rol');
    }
}
