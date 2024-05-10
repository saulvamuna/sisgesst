<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\RiskAcceptability;
use Livewire\Component;

class Sixth extends Component
{
    public $riskAceptavility, $riskAceptabilities, $aceptabilityColor, $aceptabilityMeaning;
    public $interventionName;

    protected $listeners = ['interventionData'];

    public function mount($interventionName)
    {
        $this->riskAceptabilities = RiskAcceptability::all();
        $this->interventionName = $interventionName;

        if($this->interventionName){
            $this->aceptabilityRisk();
        }
    }

    public function interventionData($dataIntervention)
    {
        $this->interventionName = $dataIntervention['interventionName'];
        $this->aceptabilityRisk();
    }

    public function aceptabilityRisk()
    {
        foreach($this->riskAceptabilities as $aceptavility){
            if($this->interventionName == $aceptavility->name){
                $this->riskAceptavility = $aceptavility->id;
                $this->aceptabilityColor = $aceptavility->color;
                $this->aceptabilityMeaning = $aceptavility->meaning;

                $this->emit('riskPartThree', $this->riskAceptavility);
            }
        }
    }

    public function render()
    {
        return view('livewire.evaluation.options.sixth');
    }
}
