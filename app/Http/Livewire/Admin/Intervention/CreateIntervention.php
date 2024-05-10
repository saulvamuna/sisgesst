<?php

namespace App\Http\Livewire\Admin\Intervention;

use App\Models\InterventionMeasure;
use Livewire\Component;

class CreateIntervention extends Component
{
    public $openCreateIntervention = false;
    public $intervention, $interventionDescription;

    protected $rules = [
        'interventionDescription' => 'required',
    ];

    public function mount($intervention)
    {
        $this->intervention = $intervention;
    }

    public function createDanger()
    {
        $this->validate();

        InterventionMeasure::create([
            'name' => $this->intervention,
            'description' => $this->interventionDescription,
        ]);

        $this->openCreateIntervention = false;
        $this->emit('mountIntervention');
        $this->emit('deleteConfirmeIntervention');
        $this->reset('interventionDescription');
    }

    public function render()
    {
        return view('livewire.admin.intervention.create-intervention');
    }
}
