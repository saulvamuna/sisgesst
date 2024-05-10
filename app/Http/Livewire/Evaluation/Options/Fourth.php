<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\ConsequenceLevel;
use Livewire\Component;

class Fourth extends Component
{
    public $consequenceLevel, $consequenceLevels, $consequenceValue, $consequenceColor, $consequenceyMeaning;

    public function mount($consequenceId)
    {
        $this->consequenceLevels = ConsequenceLevel::all();
        $this->consequenceLevel = $consequenceId;
        if($this->consequenceLevel){
            $this->updatedConsequenceLevel();
        }
    }

    public function updatedConsequenceLevel()
    {
        $this->consequenceSelected();
    }
    public function consequenceSelected()
    {
        $consequenceData = ConsequenceLevel::find($this->consequenceLevel);
        $this->consequenceValue = $consequenceData->value;
        $this->consequenceColor = $consequenceData->color;
        $this->consequenceyMeaning = $consequenceData->meaning;
        $this->emit('calculateConsequence', [
            'consequenceId' => $this->consequenceLevel,
            'consequenceValue' => $this->consequenceValue
        ]);
    }

    public function render()
    {
        return view('livewire.evaluation.options.fourth');
    }
}
