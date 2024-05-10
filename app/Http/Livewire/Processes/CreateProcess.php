<?php

namespace App\Http\Livewire\Processes;

use App\Models\Process;
use Livewire\Component;

class CreateProcess extends Component
{
    public $open = false;
    public $companyId, $companyName;
    public $name, $description;

    protected $rules = [
        'name'          => 'required',
        'description'   => 'required',
    ];

    public function mount($companyId, $companyName)
    {
        $this->companyId = $companyId;
        $this->companyName = $companyName;
    }

    public function save()
    {
        $this->validate();

        Process::create([
            'name' => $this->name,
            'description' => $this->description,
            'company_id' => $this->companyId,
        ]);

        $this->reset(['open', 'name', 'description']);
        $this->emit('selectedProcess');
        $this->emit('render');
        $this->emit('alert');
    }

    public function render()
    {
        return view('livewire.processes.create-process');
    }
}
