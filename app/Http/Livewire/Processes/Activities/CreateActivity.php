<?php

namespace App\Http\Livewire\Processes\Activities;

use App\Models\Activity;
use App\Models\Process;
use Livewire\Component;

class CreateActivity extends Component
{
    public $open = false;
    public $selectedProcess, $companyProcessId;
    public $name, $description, $process_id;
    public $listeners = ['process','selectedProcess'];

    protected $rules = [
        'process_id'    => 'required',
        'name'          => 'required',
        'description'   => 'required',
    ];

    public function mount($companyId)
    {
        $this->companyProcessId = $companyId;
        $this->selectedProcess();
    }

    public function selectedProcess(){
        $this->selectedProcess = Process::where('company_id', $this->companyProcessId)->get();
    }

    public function save()
    {
        $this->validate();

        Activity::create([
            'name' => $this->name,
            'description' => $this->description,
            'process_id' => $this->process_id,
        ]);

        Process::where('id', $this->process_id)
            ->where('status', 'Evaluado')
            ->update([
                'status' => 'sin evaluar',
            ]);;

        $this->reset(['open', 'name', 'description', 'process_id']);
        $this->emit('selectedActivity');
        $this->emit('render');
        $this->emit('alert');
    }

    public function render()
    {
        return view('livewire.processes.activities.create-activity');
    }
}
