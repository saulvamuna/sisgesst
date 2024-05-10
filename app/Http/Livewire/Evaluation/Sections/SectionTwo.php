<?php

namespace App\Http\Livewire\Evaluation\Sections;

use Livewire\Component;

class SectionTwo extends Component
{

    public $danger, $effects, $source, $means, $individual;

    protected $listeners = ['nextPosition2','previousPosition2'];
    protected $rules = [
        'danger'        => 'required',
        'effects'       => 'required',
        'source'        => 'required',
        'means'         => 'required',
        'individual'    => 'required',
    ];

    public function mount($sectionDanger, $sectionEffects, $sectionSource, $sectionMeans, $sectionIndividual)
    {
        $this->danger = $sectionDanger;
        $this->effects = $sectionEffects;
        $this->source = $sectionSource;
        $this->means = $sectionMeans;
        $this->individual = $sectionIndividual;
    }

    public function nextPosition2()
    {
        $this->validate();

        $this->emit('sectionTwo',[
            'danger' => $this->danger,
            'effects' => $this->effects,
            'source' => $this->source,
            'means' => $this->means,
            'individual' => $this->individual,
        ]);
        $this->emit('increasePosition');
    }
    public function previousPosition2()
    {
        $this->emit('decreasePosition');
    }

    public function render()
    {
        return view('livewire.evaluation.sections.section-two');
    }
}
