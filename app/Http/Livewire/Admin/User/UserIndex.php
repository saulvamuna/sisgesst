<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{
    public $openDelete = false, $search, $deleteuser;
    protected $listeners = ['render'];

    public function confirmDelete($id)
    {
        $this->deleteuser = User::find($id);
        $this->openDelete = true; // Abre el modal de confirmación
    }

    public function deleteConfirmed()
    {
        if ($this->deleteuser) {
            $this->deleteuser->delete();
            $this->emitTo('companies.show-company', 'render');
        }
        $this->openDelete = false; // Cierra el modal de confirmación
        $this->emit('alertDelete');

    }

    public function render()
    {
        $users = User::with('roles')->where(function ($query) {
            $query->where('name', 'like', '%'.$this->search.'%')
                ->orWhere('id', 'like', '%'.$this->search.'%')
                ->orWhere('email', 'like', '%'.$this->search.'%');
        })->paginate(15);
        return view('livewire.admin.user.user-index', compact('users'));
    }
}
