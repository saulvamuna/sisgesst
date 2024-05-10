<?php

namespace App\Http\Livewire\Evaluation\Details;

use App\Models\DangerDescription;
use Livewire\Component;

class DetailTwo extends Component
{
    public $evaluations;
    public $dangerDescription;
    public function mount($evaluations)
    {
        $this->evaluations = $evaluations;
        $this->dangerDescription = DangerDescription::find($this->evaluations->id_danger_description);
    }
    public function render()
    {
        return view('livewire.evaluation.details.detail-two');
    }
}
