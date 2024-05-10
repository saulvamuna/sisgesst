<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'danger_classification',
        'id_danger_description',
        'danger',
        'possible_effects',
        'source',
        'means',
        'individual',
        'id_deficiency_level',
        'id_exposure_level',
        'id_probability_level',
        'value_probability_level',
        'id_consequence_level',
        'id_intervention_risk_level',
        'risk_level_interpretation',
        'id_risk_acceptability',
        'linked',
        'contractors',
        'temporary',
        'exposure_time',
        'verification_result',
        'legal_requirement',
        'evaluator',
    ];

    public function task(): BelongsTo
    {
        return $this->belongsTo(task::class);
    }

    public function dangerDescription(): BelongsTo
    {
        return $this->belongsTo(DangerDescription::class);
    }

    public function deficiencyLevel(): BelongsTo
    {
        return $this->belongsTo(DeficiencyLevel::class);
    }

    public function exposureLevel(): BelongsTo
    {
        return $this->belongsTo(ExposureLevel::class);
    }

    public function probabilityLevel(): BelongsTo
    {
        return $this->belongsTo(ProbabilityLevel::class);
    }

    public function consequenceLevel(): BelongsTo
    {
        return $this->belongsTo(ConsequenceLevel::class);
    }

    public function interventionRiskLevel(): BelongsTo
    {
        return $this->belongsTo(InterventionRiskLevel::class);
    }

    public function riskAcceptabilitity(): BelongsTo
    {
        return $this->belongsTo(RiskAcceptability::class);
    }

    public function interventionMeasures(): BelongsToMany
    {
        return $this->belongsToMany(InterventionMeasure::class, 'evaluation_intervention_measures', 'id_evaluation', 'id_intervention_measure')
        ->withPivot('suggestion')
        ->withTimestamps();
    }
}
