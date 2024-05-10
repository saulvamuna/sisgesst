<?php

namespace App\Http\Livewire\Processes\Tasks;

use App\Models\Activity;
use App\Models\Process;
use App\Models\Task;
use Livewire\Component;

class CreateTask extends Component
{
    public $open = false;
    public $name, $description, $routine, $activity_id;
    public $companyProcessId, $processes, $selectedActivity;

    protected $listeners = ['selectedActivity'];
    protected $rules = [
        'activity_id'   => 'required',
        'name'          => 'required',
        'description'   => 'required',
        'routine'       => 'required',
    ];

    public function mount($companyId)
    {
        $this->companyProcessId = $companyId;
        $this->selectedActivity();
    }

    public function selectedActivity()
    {
        $this->processes = Process::where('company_id', $this->companyProcessId)->get();
        $this->selectedActivity = Activity::whereIn('process_id', $this->processes->pluck('id'))->get();
    }

    public function save()
    {
        $this->validate();

        Task::create([
            'name' => $this->name,
            'description' => $this->description,
            'routine' => $this->routine,
            'activity_id' => $this->activity_id,
        ]);

        Activity::where('id', $this->activity_id)
            ->where('status', 'Evaluado')
            ->update([
                'status' => 'sin evaluar',
            ]);

        $activity = Activity::where('id', $this->activity_id)->first();
        $processId = $activity->process_id;

        Process::where('id', $processId)
            ->where('status', 'Evaluado')
            ->update([
                'status' => 'sin evaluar',
            ]);

        $this->reset(['open', 'name', 'description', 'routine', 'activity_id']);
        $this->emit('renderProcess');
        $this->emit('alert');
    }


    public function render()
    {
        return view('livewire.processes.tasks.create-task');
    }
}
