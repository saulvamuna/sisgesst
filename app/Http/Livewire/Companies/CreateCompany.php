<?php

namespace App\Http\Livewire\Companies;

use App\Models\Company;
use Livewire\Component;
use App\Models\City;


class CreateCompany extends Component
{
    public $open = false;
    public $cities;
    public  $nit, $name ,$email ,$direct_workers ,$indirect_workers ,$made_by ,$position ,$city ,$economic_sector;

    protected $rules = [
        'nit'               => 'required',
        'name'              => 'required',
        'email'             => 'required|email',
        'direct_workers'    => 'required',
        'indirect_workers'  => 'required',
        'made_by'           => 'required',
        'position'          => 'required',
        'city'              => 'required',
        'economic_sector'   => 'required',
    ];

    public function save()
    {
        $this->validate();
        Company::create([
            'nit' => $this->nit,
            'name' => $this->name,
            'email' => $this->email,
            'number_direct_workers' => $this->direct_workers,
            'number_indirect_workers' => $this->indirect_workers,
            'made_by' => $this->made_by,
            'position' => $this->position,
            'city_id' => $this->city,
            'economic_sector' => $this->economic_sector
        ]);

        $this->reset(['open', 'nit', 'name', 'email', 'direct_workers', 'indirect_workers', 'made_by', 'position', 'city', 'economic_sector']);
        $this->emit('render');
        $this->emit('alert');
    }


    public function mount(){
        $this->cities = City::orderBy('name', 'asc')->get();
    }

    public function render()
    {
        return view('livewire.companies.create-company');
    }
}
