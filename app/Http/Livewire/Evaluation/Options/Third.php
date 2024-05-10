<?php

namespace App\Http\Livewire\Evaluation\Options;

use App\Models\ProbabilityLevel;
use Livewire\Component;

class Third extends Component
{
    public $probabilityLevels, $exposureDeficiencyResult, $probabilityName, $probabilityColor, $probabilityMeaning;
    public $valueOne, $valueTwo, $probabilityValueResult;
    public $deficiencyId, $deficiencyValue, $exposureId, $exposureValue;

    protected $listeners = ['calculateDeficiency', 'calculateExposure'];

    public function mount($probabilityValue, $deficiencyId, $deficiencyValue, $exposureId, $exposureValue){
        $this->probabilityLevels = ProbabilityLevel::all();
        $this->exposureDeficiencyResult = $probabilityValue;
        $this->deficiencyId = $deficiencyId;
        $this->deficiencyValue = $deficiencyValue;
        $this->exposureId = $exposureId;
        $this->exposureValue = $exposureValue;

        if($this->deficiencyId or $this->exposureId){
            $this->calculateProbability();
        }
    }

    public function calculateDeficiency($dataDeficiency)
    {
        $this->deficiencyId = $dataDeficiency['deficiencyId'];
        $this->deficiencyValue = $dataDeficiency['deficiencyValue'];
        $this->calculateProbability();
    }
    public function calculateExposure($dataExposure)
    {
        $this->exposureId = $dataExposure['exposureId'];
        $this->exposureValue = $dataExposure['exposureValue'];
        $this->calculateProbability();
    }

    public function calculateProbability()
    {
        $operation = $this->deficiencyValue * $this->exposureValue;
        if($this->exposureDeficiencyResult and $operation === 0){
            $this->exposureDeficiencyResult = $this->exposureDeficiencyResult;
        }else{
            $this->exposureDeficiencyResult = $operation;
        }

        foreach($this->probabilityLevels as $probability){

            list($this->valueOne, $this->valueTwo) = explode("-", $probability->value);

            if($this->exposureDeficiencyResult <= $this->valueOne and $this->exposureDeficiencyResult >= $this->valueTwo){
                $this->probabilityName = $probability->name;
                $this->probabilityValueResult = $this->exposureDeficiencyResult;
                $this->probabilityColor = $probability->color;
                $this->probabilityMeaning = $probability->meaning;

                $this->emit('riskPartOne', [
                    'defiencyId' => $this->deficiencyId,
                    'defiencyValue' => $this->deficiencyValue,
                    'exposureId' => $this->exposureId,
                    'exposureValue' => $this->exposureValue,
                    'probabilityId' => $probability->id,
                    'probabilityValue' => $this->probabilityValueResult,
                ]);

            }elseif($this->exposureDeficiencyResult === 0){
                $this->reset('probabilityName','probabilityValueResult','probabilityColor','probabilityMeaning');
            }
        }
    }

    public function render()
    {
        return view('livewire.evaluation.options.third');
    }
}
