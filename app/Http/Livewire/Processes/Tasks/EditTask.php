<?php

namespace App\Http\Livewire\Processes\Tasks;

use App\Models\Activity;
use App\Models\Process;
use Livewire\Component;

class EditTask extends Component
{
    public $openEditTask = false;
    public $companyProcessId, $processes, $selectedActivity, $task;
    public $activity_id, $name, $description, $routine;

    protected $rules = [
        'name'              => 'required',
        'description'       => 'required',
        'routine'           => 'required',
        'activity_id'       => 'required',
    ];

    public function mount($task, $companyId)
    {
        $this->companyProcessId = $companyId;
        $this->name = $task->name;
        $this->description = $task->description;
        $this->routine = $task->routine;
        $this->activity_id = $task->activity_id;
        $this->processes = Process::where('company_id', $this->companyProcessId)->get();
        $this->selectedActivity();
    }

    public function selectedActivity()
    {
        $this->selectedActivity = Activity::whereIn('process_id', $this->processes->pluck('id'))->get();
    }

    public function updateTask()
    {
        $this->validate();

        $this->task->update([
            'name'             => $this->name,
            'description'      => $this->description,
            'routine'          => $this->routine,
            'activity_id'      => $this->activity_id,
        ]);

        $this->reset('openEditTask');
        $this->emit('render');
        $this->emit('alertEdit');
    }


    public function render()
    {
        return view('livewire.processes.tasks.edit-task');
    }
}
