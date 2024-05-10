<?php

namespace App\Http\Livewire\Processes\Activities;

use App\Models\Process;
use Livewire\Component;

class EditActivity extends Component
{
    public $open = false;
    public $activity, $activityId, $name, $description, $processId, $companyId, $selectedProcess, $process_id;

    protected $rules = [
        'name'              => 'required',
        'description'       => 'required',
        'process_id'        => 'required',
    ];

    public function mount($activity, $companyId)
    {
        $this->name = $activity->name;
        $this->description = $activity->description;
        $this->process_id = $activity->process_id;
        $this->companyId = $companyId;
        $this->selectedProcess = Process::where('company_id', $this->companyId)->get();
    }


    public function updateActivity()
    {
        $this->validate();

        $this->activity->update([
            'name'             => $this->name,
            'description'      => $this->description,
            'process_id'       => $this->process_id,
        ]);

        $this->reset('open');
        $this->emit('render');
        $this->emit('alertEdit');
    }

    public function render()
    {
        return view('livewire.processes.activities.edit-activity');
    }
}
