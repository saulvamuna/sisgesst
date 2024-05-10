<?php

namespace App\Http\Livewire\Evaluation\Details;

use App\Models\ConsequenceLevel;
use App\Models\DeficiencyLevel;
use App\Models\ExposureLevel;
use App\Models\InterventionRiskLevel;
use App\Models\ProbabilityLevel;
use App\Models\RiskAcceptability;
use Livewire\Component;

class DetailThree extends Component
{
    public $evaluations;
    public $deficiencyLevel, $exposureLevel, $probabilityLevel, $consequenceLevel, $interventionLevel, $riskAcceptability;
    public function mount($evaluations)
    {
        $this->evaluations = $evaluations;

        $this->deficiencyLevel = DeficiencyLevel::find($this->evaluations->id_deficiency_level);
        $this->exposureLevel = ExposureLevel::find($this->evaluations->id_exposure_level);
        $this->probabilityLevel = ProbabilityLevel::find($this->evaluations->id_probability_level);
        $this->consequenceLevel = ConsequenceLevel::find($this->evaluations->id_consequence_level);
        $this->interventionLevel = InterventionRiskLevel::find($this->evaluations->id_intervention_risk_level);
        $this->riskAcceptability = RiskAcceptability::find($this->evaluations->id_risk_acceptability);
    }
    public function render()
    {
        return view('livewire.evaluation.details.detail-three');
    }
}
