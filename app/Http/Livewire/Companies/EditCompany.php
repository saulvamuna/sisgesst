<?php

namespace App\Http\Livewire\Companies;

use App\Models\City;
use Livewire\Component;

class EditCompany extends Component
{
    public $open = false;
    public $company, $cities, $nit, $name, $email, $direct_workers,
        $indirect_workers, $made_by, $position, $city, $economic_sector;

    protected $rules = [
        'nit'                     => 'required',
        'name'                    => 'required',
        'email'                   => 'required',
        'direct_workers'          => 'required',
        'indirect_workers'        => 'required',
        'made_by'                 => 'required',
        'position'                => 'required',
        'city'                    => 'required',
        'economic_sector'         => 'required',
    ];

    public function mount($company)
    {
        $this->nit              = $company->nit;
        $this->name             = $company->name;
        $this->email            = $company->email;
        $this->direct_workers   = $company->number_direct_workers;
        $this->indirect_workers = $company->number_indirect_workers;
        $this->made_by          = $company->made_by;
        $this->position         = $company->position;
        $this->city             = $company->city_id;
        $this->economic_sector  = $company->economic_sector;

        $this->cities = City::orderBy('name', 'asc')->get();
    }

    public function updateCompany(){
        $this->validate();

        $this->company->update([
            'nit'                     => $this->nit,
            'name'                    => $this->name,
            'email'                   => $this->email,
            'number_direct_workers'   => $this->direct_workers,
            'number_indirect_workers' => $this->indirect_workers,
            'made_by'                 => $this->made_by,
            'position'                => $this->position,
            'city_id'                 => $this->city,
            'economic_sector'         => $this->economic_sector
        ]);

        $this->reset('open');
        $this->emit('render');
        $this->emit('alertEdit');
    }

    public function render()
    {
        return view('livewire.companies.edit-company');
    }
}
