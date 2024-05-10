<?php

namespace App\Http\Livewire\Evaluation\Details;

use Livewire\Component;

class DetailFour extends Component
{
    public $evaluations;
    public function mount($evaluations)
    {
        $this->evaluations = $evaluations;
    }
    public function render()
    {
        return view('livewire.evaluation.details.detail-four');
    }
}
