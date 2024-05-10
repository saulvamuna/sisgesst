<?php

namespace App\Http\Livewire\Admin\Intervention;

use App\Models\InterventionMeasure;
use Livewire\Component;

class EditIntervention extends Component
{
    public $openIntervention = false;
    public $openDeleteIntervention = false;
    public $intervention, $deleteIntervention, $interventions, $interventionId = [], $interventionDescription = [];

    protected $listeners = ['deleteConfirmeIntervention'];

    protected $rules = [
        'interventionDescription.*' => 'required',
    ];

    public function mount($intervention)
    {
        $this->intervention = $intervention;
        $this->dataIntervention();
    }

    public function dataIntervention()
    {
        $this->interventions = InterventionMeasure::where('name', $this->intervention)->get();
        foreach($this->interventions as $intervention){
            $this->interventionId[] = $intervention->id;
            $this->interventionDescription[] = $intervention->description;
        }
    }

    public function saveIntervention()
    {
        $this->validate();

        foreach ($this->interventions as $index => $query) {
            $query->description = $this->interventionDescription[$index];
            $query->save();
        }
        $this->reset('openIntervention');
        $this->emit('renderIntervention');
    }

    public function confirmDeleteIntervention($position)
    {
        $this->deleteIntervention = $position;
        $this->openDeleteIntervention = true;
    }

    public function deleteConfirmeIntervention()
    {
        if ($this->deleteIntervention) {
            foreach ($this->interventions as $index => $query) {
                if ($this->deleteIntervention == $index) {
                    $query->id = $this->interventionId[$index];
                    $query->delete();
                }
            }
        }

        $this->emit('renderIntervention');
        $this->openDeleteIntervention = false;
        $this->openIntervention = false;
        $this->interventionDescription = [];
        $this->dataIntervention();
    }
    public function render()
    {
        return view('livewire.admin.intervention.edit-intervention');
    }
}
