<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class InterventionMeasure extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function evaluations(): BelongsToMany
    {
        return $this->belongsToMany(Evaluation::class, 'evaluation_intervention_measures', 'id_intervention_measure', 'id_evaluation')
        ->withPivot('suggestion')
        ->withTimestamps();
    }
}
