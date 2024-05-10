<?php

namespace App\Http\Controllers;

use App\Models\ConsequenceLevel;
use App\Models\DangerDescription;
use App\Models\DeficiencyLevel;
use App\Models\Evaluation;
use App\Models\ExposureLevel;
use App\Models\InterventionRiskLevel;
use App\Models\ProbabilityLevel;
use App\Models\RiskAcceptability;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public  $evaluations;
    public function report($id)
    {
        $evaluation = Evaluation::find($id);
        $dangerDescription = DangerDescription::find($evaluation->id_danger_description);

        $deficiencyLevel = DeficiencyLevel::find($evaluation->id_deficiency_level);
        $exposureLevel = ExposureLevel::find($evaluation->id_exposure_level);
        $probabilityLevel = ProbabilityLevel::find($evaluation->id_probability_level);
        $consequenceLevel = ConsequenceLevel::find($evaluation->id_consequence_level);
        $interventionLevel = InterventionRiskLevel::find($evaluation->id_intervention_risk_level);
        $riskAcceptability = RiskAcceptability::find($evaluation->id_risk_acceptability);

        $interventionMeasures = $evaluation->interventionMeasures;

        foreach ($interventionMeasures as $measure) {

            if ($measure->name === "Eliminacion") {
                $elimination = $measure->description;
                $eliminationSuggestion = $measure->pivot->suggestion;
            }
            if ($measure->name === "Sustitucion") {
                $substitution = $measure->description;
                $substitutionSuggestion = $measure->pivot->suggestion;
            }
            if ($measure->name === "Controles de ingenieria") {
                $controlEngineering = $measure->description;
                $engineeringSuggestion = $measure->pivot->suggestion;
            }
            if ($measure->name === "Controles administrativos, señalización, advertencia") {
                $administrativeControls = $measure->description;
                $administrativeSuggestion = $measure->pivot->suggestion;
            }
            if ($measure->name === "Equipo / elementos de protección personal") {
                $personalProtection = $measure->description;
                $protectionSuggestion = $measure->pivot->suggestion;
            }
        }

        $pdf = Pdf::loadView('create-pdf', compact('evaluation', 'dangerDescription', 'deficiencyLevel', 'exposureLevel', 'probabilityLevel',
            'consequenceLevel', 'interventionLevel', 'riskAcceptability', 'elimination', 'eliminationSuggestion', 'substitution',
            'substitutionSuggestion', 'controlEngineering', 'engineeringSuggestion', 'administrativeControls', 'administrativeSuggestion',
            'personalProtection', 'protectionSuggestion'));

        return $pdf->download($evaluation->task->activity->process->company->name.'-'.$evaluation->task->name.'.pdf');
    }

    public function index()
    {
        $evaluation = Evaluation::find(7);
        $dangerDescription = DangerDescription::find($evaluation->id_danger_description);

        $deficiencyLevel = DeficiencyLevel::find($evaluation->id_deficiency_level);
        $exposureLevel = ExposureLevel::find($evaluation->id_exposure_level);
        $probabilityLevel = ProbabilityLevel::find($evaluation->id_probability_level);
        $consequenceLevel = ConsequenceLevel::find($evaluation->id_consequence_level);
        $interventionLevel = InterventionRiskLevel::find($evaluation->id_intervention_risk_level);
        $riskAcceptability = RiskAcceptability::find($evaluation->id_risk_acceptability);

        $interventionMeasures = $evaluation->interventionMeasures;

        foreach ($interventionMeasures as $measure) {

            if ($measure->name === "Eliminacion") {
                $elimination = $measure->description;
                $eliminationSuggestion = $measure->pivot->suggestion;
            }
            if ($measure->name === "Sustitucion") {
                $substitution = $measure->description;
                $substitutionSuggestion = $measure->pivot->suggestion;
            }
            if ($measure->name === "Controles de ingenieria") {
                $controlEngineering = $measure->description;
                $engineeringSuggestion = $measure->pivot->suggestion;
            }
            if ($measure->name === "Controles administrativos, señalización, advertencia") {
                $administrativeControls = $measure->description;
                $administrativeSuggestion = $measure->pivot->suggestion;
            }
            if ($measure->name === "Equipo / elementos de protección personal") {
                $personalProtection = $measure->description;
                $protectionSuggestion = $measure->pivot->suggestion;
            }
        }

        return view('create-pdf', compact('evaluation', 'dangerDescription', 'deficiencyLevel', 'exposureLevel', 'probabilityLevel',
            'consequenceLevel', 'interventionLevel', 'riskAcceptability', 'elimination', 'eliminationSuggestion', 'substitution',
            'substitutionSuggestion', 'controlEngineering', 'engineeringSuggestion', 'administrativeControls', 'administrativeSuggestion',
            'personalProtection', 'protectionSuggestion'));
    }
}
