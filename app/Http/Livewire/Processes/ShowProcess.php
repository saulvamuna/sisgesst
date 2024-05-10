<?php

namespace App\Http\Livewire\Processes;

use App\Models\Process;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProcess extends Component
{
    use WithPagination;

    public $companyId, $processId, $processName, $processDelete, $search;
    public $open = false, $openDelete = false;

    protected $listeners = ['render', 'renderProcess' => 'render'];

    public $openProcesses = [];

    public function mount($companyId)
    {
        $this->companyId = $companyId;
        $this->emitTo('activities.create-activity', 'companyId', $companyId);
    }

    public function toggleContent($processId)
    {
        if (in_array($processId, $this->openProcesses)) {
            $this->openProcesses = array_diff($this->openProcesses, [$processId]);
        } else {
            $this->openProcesses[] = $processId;
        }
    }


    public function processId($id, $name, $companyId)
    {
        $this->emit('processFact', [
            'processId' => $id,
            'processName' => $name,
            'companyId' => $companyId
        ]);
    }

    public function confirmDelete($id)
    {
        $this->processDelete = Process::find($id);
        $this->openDelete = true; // Abre el modal de confirmación
    }

    public function deleteConfirmed()
    {
        if ($this->processDelete) {
            $this->processDelete->delete();
            $this->emitTo('companies.show-company', 'render');
        }
        $this->openDelete = false;
        $this->emit('alertDelete');
    }

    public function render()
    {
        $processes = Process::where('company_id', $this->companyId)
          ->where('status', 'sin evaluar')
          ->where(function ($query) {
              $query->where('name', 'like', '%'.$this->search.'%')
                  ->orWhere('id', 'like', '%'.$this->search.'%')
                  ->orWhere('description', 'like', '%'.$this->search.'%');
          })->paginate(5);
        return view('livewire.processes.show-process', [
            'processes' => $processes,
        ]);
    }
}
