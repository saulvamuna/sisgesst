<?php

namespace App\Http\Livewire\Evaluation\Details;

use Livewire\Component;

class DetailOne extends Component
{
    public $evaluations;
    public function mount($evaluations)
    {
        $this->evaluations = $evaluations;
    }
    public function render()
    {
        return view('livewire.evaluation.details.detail-one');
    }
}
