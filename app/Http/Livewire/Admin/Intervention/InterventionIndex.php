<?php

namespace App\Http\Livewire\Admin\Intervention;

use App\Models\InterventionMeasure;
use Livewire\Component;

class InterventionIndex extends Component
{
    public $interventions;

    protected $listeners = ['renderIntervention' => 'render', 'mountIntervention' => 'mount'];

    public function mount()
    {
        $this->interventions = InterventionMeasure::get();
    }

    public function render()
    {
        return view('livewire.admin.intervention.intervention-index');
    }
}
