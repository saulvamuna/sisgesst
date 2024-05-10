<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\DeficiencyLevel;
use Livewire\Component;

class First extends Component
{
    public $deficiencies, $deficiencyLevel, $deficiencyValue, $deficiencyColor, $deficiencyMeaning;

    protected $rules = [
        'deficiencyLevel' => 'required',
    ];

    public function mount($deficiencyId)
    {
        $this->deficiencies = DeficiencyLevel::all();
        $this->deficiencyLevel = $deficiencyId;
        if($this->deficiencyLevel){
            $this->updatedDeficiencyLevel();
        }
    }

    public function updatedDeficiencyLevel()
    {
        $this->deficiencySelected();
    }

    public function deficiencySelected()
    {
        $deficiencyData = DeficiencyLevel::find($this->deficiencyLevel);
        $this->deficiencyValue = $deficiencyData->value;
        $this->deficiencyColor = $deficiencyData->color;
        $this->deficiencyMeaning = $deficiencyData->meaning;

        $this->emit('calculateDeficiency', [
            'deficiencyId' => $this->deficiencyLevel,
            'deficiencyValue' => $this->deficiencyValue
        ]);
    }

    public function render()
    {
        return view('livewire.evaluation.options.first');
    }
}
