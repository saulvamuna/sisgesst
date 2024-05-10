<?php

namespace App\Http\Livewire\Evaluation;

use App\Models\Company;
use Livewire\Component;

class ShowEvaluation extends Component
{
    public $companyId, $companies, $processes, $activities, $tasks;
    public $evaluations;

    public function mount($id)
    {
        $this->companyId = $id;
        $this->companies = Company::query()->with([
            'processes',
            'processes.activities',
            'processes.activities.tasks',
            'processes.activities.tasks.evaluations',
        ])->find($this->companyId);
        $this->processes = $this->companies->processes;
        $this->activities = $this->processes->flatMap->activities;
        $this->tasks = $this->activities->flatMap->tasks;
        $this->evaluations = $this->tasks->flatMap->evaluations;
    }

    public function render()
    {
        return view('livewire.evaluation.show-evaluation');
    }
}
