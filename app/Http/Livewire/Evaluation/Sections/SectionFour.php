<?php

namespace App\Http\Livewire\Evaluation\Sections;

use Livewire\Component;

class SectionFour extends Component
{
    public $linked, $contractor, $temporary, $time;
    protected $listeners = ['nextPosition4','previousPosition4'];

    protected $rules = [
        'linked'        => 'required',
        'contractor'    => 'required',
        'temporary'     => 'required',
        'time'          => 'required',
    ];

    public function mount($sectionLinked, $sectionContractor, $sectionTemporary, $sectionTime)
    {
        $this->linked = $sectionLinked;
        $this->contractor = $sectionContractor;
        $this->temporary = $sectionTemporary;
        $this->time = $sectionTime;
    }

    public function nextPosition4()
    {
        $this->validate();

        $this->emit('sectionFour', [
            'linked' => $this->linked,
            'contractor' => $this->contractor,
            'temporary' => $this->temporary,
            'time' => $this->time,
        ]);
        $this->emit('increasePosition');
    }
    public function previousPosition4()
    {
        $this->emit('decreasePosition');

    }
    public function render()
    {
        return view('livewire.evaluation.sections.section-four');
    }
}
