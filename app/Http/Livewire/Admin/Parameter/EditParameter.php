<?php

namespace App\Http\Livewire\Admin\Parameter;

use App\Models\ConsequenceLevel;
use App\Models\DeficiencyLevel;
use App\Models\ExposureLevel;
use App\Models\InterventionRiskLevel;
use App\Models\ProbabilityLevel;
use App\Models\RiskAcceptability;
use Livewire\Component;

class EditParameter extends Component
{
    public $parameter, $dataQueries = [], $parameterId = [], $parameterName = [], $parameterPrefix = [], $parameterValue = [], $parameterMeaning = [];
    public $deleteParameter;
    public $openParameter = false;
    public $openDeleteParameter = false;

    protected $listeners = ['deleteConfirmeParameter'];

    protected $rules = [
        'parameterName.*'       => 'required',
        'parameterPrefix.*'     => 'required',
        'parameterValue.*'      => 'required',
        'parameterMeaning.*'    => 'required',
    ];

    public function mount($parameter)
    {
        $this->parameter = $parameter;
        $this->dataParameter();
    }

    public function dataParameter()
    {
        if ($this->parameter === "deficiency") {
            $this->dataQueries = DeficiencyLevel::get();
        } elseif ($this->parameter === "exposure") {
            $this->dataQueries = ExposureLevel::get();
        } elseif ($this->parameter === "probability") {
            $this->dataQueries = ProbabilityLevel::get();
        } elseif ($this->parameter === "consequence") {
            $this->dataQueries = ConsequenceLevel::get();
        } elseif ($this->parameter === "risk") {
            $this->dataQueries = InterventionRiskLevel::get();
        } elseif ($this->parameter === "acceptability") {
            $this->dataQueries = RiskAcceptability::get();
        }

        foreach ($this->dataQueries as $query) {
            $this->parameterId[] = $query->id;
            $this->parameterName[] = $query->name;
            $this->parameterPrefix[] = $query->prefix;
            $this->parameterValue[] = $query->value;
            $this->parameterMeaning[] = $query->meaning;
        }
    }

    public function saveParameter()
    {
        $this->validate();
        foreach ($this->dataQueries as $index => $query) {
            $query->name = $this->parameterName[$index];
            if (!empty($parameterPrefix[$index])) {
                $query->prefix = $this->parameterPrefix[$index];
            }
            if (!empty($parameterValue[$index])) {
                $query->value = $this->parameterValue[$index];
            }
            $query->meaning = $this->parameterMeaning[$index];

            $query->save();
        }
        $this->reset('openParameter');
        $this->emit('render');
    }

    public function confirmDelete($position)
    {
        $this->deleteParameter = $position;
        $this->openDeleteParameter = true;
    }

    public function deleteConfirmeParameter()
    {
        if ($this->deleteParameter) {
            foreach ($this->dataQueries as $index => $query) {
                if ($this->deleteParameter == $index) {
                    $query->id = $this->parameterId[$index];
                    $query->delete();
                }
            }
        }

        $this->emit('render');
        $this->openDeleteParameter = false;
        $this->openParameter = false;

        $this->parameterId = [];
        $this->parameterName = [];
        $this->parameterPrefix = [];
        $this->parameterValue = [];
        $this->parameterMeaning = [];

        $this->dataParameter();
    }

    public function render()
    {
        return view('livewire.admin.parameter.edit-parameter');
    }
}
