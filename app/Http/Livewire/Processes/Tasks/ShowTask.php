<?php

namespace App\Http\Livewire\Processes\Tasks;

use App\Models\Activity;
use App\Models\Task;
use Livewire\Component;

class ShowTask extends Component
{
    public $open = false, $openDelete = false;
    public $activityId, $activityName, $taskDelete, $companyId;

    public function mount($activityId, $activityName, $companyId)
    {
        $this->activityId = $activityId;
        $this->activityName = $activityName;
        $this->companyId = $companyId;

    }
    public function render()
    {
        $tasks = Task::where('activity_id', $this->activityId)
            ->where('status', 'sin evaluar')->get();
        return view('livewire.processes.tasks.show-task',[
            'tasks' => $tasks,
        ]);
    }

    public function confirmDelete($id)
    {
        $this->taskDelete = Task::find($id);
        $this->openDelete = true;
    }

    public function deleteConfirmed()
    {
        if ($this->taskDelete) {
            $this->taskDelete->delete();
            $this->emitTo('companies.show-company', 'render');
        }
        $this->changeStatusActivity();
        $this->openDelete = false;
        $this->emit('alertDelete');

    }

    public function changeStatusActivity()
    {
        $queryTask = new Task;

        $taskStatus = $queryTask::where('status', 'sin evaluar')
            ->where('activity_id', $this->activityId)
            ->get();
        if (count($taskStatus) == 0) {
            Activity::where('id', $this->activityId)->update([
                'status' => 'Evaluado',
            ]);
            $this->emit('changeStatusProcess');
        }

    }
}
