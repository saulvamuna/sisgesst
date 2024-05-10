<?php

namespace App\Http\Livewire\Evaluation\Sections;

use Livewire\Component;

class SectionSix extends Component
{
    public $legal;
    protected $listeners = ['nextPosition6','previousPosition6'];

    protected $rules = [
        'legal' => 'required',
    ];
    public function nextPosition6()
    {
        $this->validate();

        $this->emit('sectionSix', $this->legal);
        $this->emit('save');
    }
    public function previousPosition6()
    {
        $this->emit('decreasePosition');

    }
    public function render()
    {
        return view('livewire.evaluation.sections.section-six');
    }
}
