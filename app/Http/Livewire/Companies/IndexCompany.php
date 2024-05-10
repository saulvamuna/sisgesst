<?php

namespace App\Http\Livewire\Companies;

use App\Models\Company;
use Livewire\Component;

class IndexCompany extends Component
{
    public $search;
    protected $listeners = ['render' => 'render'];


    public function render()
    {
        $companies = Company::query()->with([
            'city'
        ])
        ->where('name', 'like', '%'. $this->search .'%')
        ->orWhere('nit', 'like', '%'. $this->search .'%')
        ->orderBy('id', 'desc')->get();

        return view('livewire.companies.index-company', compact('companies'));
    }
}
