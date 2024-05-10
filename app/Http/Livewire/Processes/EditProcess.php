<?php

namespace App\Http\Livewire\Processes;

use App\Models\Process;
use Livewire\Component;

class EditProcess extends Component
{
    public $open = false;
    public $process, $proccessId, $name, $description;

    protected $rules = [
        'name'              => 'required',
        'description'       => 'required',
    ];

    public function mount($process)
    {
        $this->process = $process;

        $this->proccessId = $process->id;
        $this->name = $process->name;
        $this->description = $process->description;
    }

    public function update()
    {
        $this->validate();

        $this->process->update([
            'name'             => $this->name,
            'description'      => $this->description,
        ]);

        $this->reset('open');
        $this->emit('render');
        $this->emit('alertEdit');
    }

    public function render()
    {
        return view('livewire.processes.edit-process');
    }
}
