<?php

namespace App\Http\Livewire\Processes\Activities;

use App\Models\Activity;
use App\Models\Process;
use Livewire\Component;
use Livewire\WithPagination;

class ShowActivity extends Component
{
    use WithPagination;

    // public $processes, $selectedProcess, $process_id, $activities;
    public $openDelete = false;
    public $processId, $processName, $companyId, $activityDelete, $search;

    protected $listeners = ['processFact', 'changeStatusProcess', 'changeStatus'];

    public function processFact($facts)
    {
        $this->processId = $facts['processId'];
        $this->processName = $facts['processName'];
        $this->companyId = $facts['companyId'];

    }

    // public function mount($processId)
    // {
    //     $this->processId = $processId;
    // }

    public function render()
    {
        $activities = Activity::where('process_id', $this->processId)
          ->where('status', 'sin evaluar')
          ->where(function ($query) {
              $query->where('name', 'like', '%'.$this->search.'%')
                  ->orWhere('id', 'like', '%'.$this->search.'%')
                  ->orWhere('description', 'like', '%'.$this->search.'%');
              })->paginate(5);

        return view('livewire.processes.activities.show-activity', [
            'activities' => $activities,
        ]);
    }

    public function confirmDelete($id)
    {
        $this->activityDelete = Activity::find($id);
        $this->openDelete = true; // Abre el modal de confirmación
    }

    public function deleteConfirmed()
    {
        if ($this->activityDelete) {
            $this->activityDelete->delete();
            $this->emitTo('companies.show-company', 'render');
        }

        $this->changeStatusProcess();

        $this->openDelete = false;
        $this->emit('alertDelete');
    }

    public function changeStatusProcess()
    {
        $queryActicity = new Activity;

        $activityStatus = $queryActicity::where('status', 'sin evaluar')
            ->where('process_id', $this->processId)
            ->get();

        if (count($activityStatus) == 0) {
            Process::where('id', $this->processId)->update([
                'status' => 'Evaluado',
            ]);
            $this->emit('renderProcess');
        }
    }
}
