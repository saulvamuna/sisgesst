<?php

namespace App\Http\Livewire\Evaluation;

use Livewire\Component;

class DetailEvaluation extends Component
{
    public $evaluations, $companyId;
    public $openDetail = false;

    public function mount($evaluations, $companyId)
    {
        $this->evaluations = $evaluations;
        $this->companyId = $companyId;
    }

    public function render()
    {
        return view('livewire.evaluation.detail-evaluation');
    }
}
