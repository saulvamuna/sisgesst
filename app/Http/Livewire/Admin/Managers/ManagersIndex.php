<?php

namespace App\Http\Livewire\Admin\Managers;

use App\Models\User;
use Livewire\Component;

class ManagersIndex extends Component
{
    public $openDelete = false;
    public $search, $user, $deleteuser;
    protected $listeners = ['render'];

    public function userUpdated()
    {
        if ($this->user) {
            $this->user = $this->user->fresh();
        }
    }

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

         $managers = User::whereHas('roles', function ($query) {
            $query->where('name', 'Gestor de empresas');
            })
            ->where(function ($query) {
            $query->where('name', 'like', '%'.$this->search.'%')
                ->orWhere('id', 'like', '%'.$this->search.'%')
                ->orWhere('email', 'like', '%'.$this->search.'%');
            })
            ->paginate(14);
        return view('livewire.admin.managers.managers-index', compact('managers'));
    }
}
