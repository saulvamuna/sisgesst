<?php

namespace App\Http\Livewire\Admin\Deactivated;

use App\Models\Company;
use Livewire\Component;

class DeactivatedIndex extends Component
{
    public $companies, $nitActive;
    public $openActive = false;

    protected $rules = [
        'nitActive' => 'required',
    ];

    public function mount()
    {
        $this->companies = Company::where('is_active', 0)->get();
    }

    public function activateCompany()
    {
        $this->openActive = true;
    }

    public function ActiveConfirmed($id)
    {
        $this->validate();
        Company::where('id', $id)->update([
            'is_active' => 1,
        ]);
        return redirect()->route('deactivated');
    }
    public function render()
    {
        return view('livewire.admin.deactivated.deactivated-index');
    }
}
