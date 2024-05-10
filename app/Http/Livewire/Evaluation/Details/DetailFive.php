<?php

namespace App\Http\Livewire\Evaluation\Details;

use Livewire\Component;

class DetailFive extends Component
{
    public $evaluations;
    public $elimination, $eliminationSuggestion, $substitution, $substitutionSuggestion, $controlEngineering, $engineeringSuggestion,
            $administrativeControls, $administrativeSuggestion, $personalProtection, $protectionSuggestion;
    public function mount($evaluations)
    {
        $this->evaluations = $evaluations;
        $interventionMeasures = $this->evaluations->interventionMeasures;

        foreach ($interventionMeasures as $measure) {

            if ($measure->name === "Eliminacion") {
                $this->elimination = $measure->description;
                $this->eliminationSuggestion = $measure->pivot->suggestion;
            }
            if ($measure->name === "Sustitucion") {
                $this->substitution = $measure->description;
                $this->substitutionSuggestion = $measure->pivot->suggestion;
            }
            if ($measure->name === "Controles de ingenieria") {
                $this->controlEngineering = $measure->description;
                $this->engineeringSuggestion = $measure->pivot->suggestion;
            }
            if ($measure->name === "Controles administrativos, señalización, advertencia") {
                $this->administrativeControls = $measure->description;
                $this->administrativeSuggestion = $measure->pivot->suggestion;
            }
            if ($measure->name === "Equipo / elementos de protección personal") {
                $this->personalProtection = $measure->description;
                $this->protectionSuggestion = $measure->pivot->suggestion;
            }
        }
    }
    public function render()
    {
        return view('livewire.evaluation.details.detail-five');
    }
}
