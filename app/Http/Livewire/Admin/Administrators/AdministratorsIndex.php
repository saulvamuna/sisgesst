<?php

namespace App\Http\Livewire\Admin\Administrators;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;


class AdministratorsIndex extends Component
{
    public $openDelete = false;
    public $search, $user, $deleteuser;
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
        $this->openDelete = false;
        $this->emit('alertDelete');

    }



    public function render()
    {

         $administrators = User::whereHas('roles', function ($query) {
            $query->where('name', 'Administrador');
            })
            ->where(function ($query) {
            $query->where('name', 'like', '%'.$this->search.'%')
                ->orWhere('id', 'like', '%'.$this->search.'%')
                ->orWhere('email', 'like', '%'.$this->search.'%');
            })
            ->paginate(14);
        return view('livewire.admin.administrators.administrators-index', compact('administrators'));
    }
}
