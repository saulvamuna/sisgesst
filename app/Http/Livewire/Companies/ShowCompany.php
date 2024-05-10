<?php

namespace App\Http\Livewire\Companies;

use App\Models\Company;
use Livewire\Component;


class ShowCompany extends Component
{
    public $company, $idCompany, $nitDeactive;
    public $openDeactive = false;
    protected $listeners = ['render'];

    protected $rules = [
        'nitDeactive' => 'required',
    ];

    public function mount($id)
    {
        $this->idCompany = $id;
        $this->company = Company::find($id);
    }

    public function deactivateCompany()
    {
        $this->openDeactive = true;
    }

    public function deactiveConfirmed()
    {
        $this->validate();
        if ($this->nitDeactive == $this->company->nit) {
            Company::where('id', $this->idCompany)->update([
                'is_active' => 0,
            ]);
            return redirect()->route('dashboard');
        }
    }


    public function render()
    {
        return view('livewire.companies.show-company');
    }
}
