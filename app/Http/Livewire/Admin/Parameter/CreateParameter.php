<?php

namespace App\Http\Livewire\Admin\Parameter;

use App\Models\ConsequenceLevel;
use App\Models\DeficiencyLevel;
use App\Models\ExposureLevel;
use App\Models\InterventionRiskLevel;
use App\Models\ProbabilityLevel;
use App\Models\RiskAcceptability;
use Livewire\Component;

class CreateParameter extends Component
{
    public $parameter, $parameterName, $parameterPrefix, $parameterValue, $parameterMeaning, $parameterColor;
    public $query;
    public $openCreateParameter = false;

    protected $rules = [
        'parameterName'         => 'required',
        'parameterPrefix'       => 'required',
        'parameterValue'        => 'required',
        'parameterMeaning'      => 'required',
        'parameterColor'      => 'required',
    ];

    public function mount($parameter)
    {
        $this->parameter = $parameter;

        if ($this->parameter === "deficiency") {
            $this->query = new DeficiencyLevel;
        } elseif ($this->parameter === "exposure") {
            $this->query = new ExposureLevel;
        } elseif ($this->parameter === "probability") {
            $this->query = new ProbabilityLevel;
        } elseif ($this->parameter === "consequence") {
            $this->query = new ConsequenceLevel;
        } elseif ($this->parameter === "risk") {
            $this->query = new InterventionRiskLevel;
        } elseif ($this->parameter === "acceptability") {
            $this->query = new RiskAcceptability;
        }
    }

    public function createParameter()
    {
        $this->validate();

        if ($this->parameter === "risk") {
            $this->query::create([
                'name' => $this->parameterName,
                'value' => $this->parameterValue,
                'meaning'   => $this->parameterMeaning,
                'color' => $this->parameterColor,
            ]);
        }elseif ($this->parameter === "acceptability") {
            $this->query::create([
                'name' => $this->parameterName,
                'meaning'   => $this->parameterMeaning,
                'color' => $this->parameterColor,
            ]);
        }else{
            $this->query::create([
                'name' => $this->parameterName,
                'prefix' => $this->parameterPrefix,
                'value' => $this->parameterValue,
                'meaning'   => $this->parameterMeaning,
                'color' => $this->parameterColor,
            ]);
        }

        $this->reset('parameterName','parameterPrefix','parameterValue','parameterMeaning','parameterColor');
        $this->openCreateParameter = false;
        $this->emit('mount');
        $this->emit('deleteConfirmeParameter');
    }

    public function render()
    {
        return view('livewire.admin.parameter.create-parameter');
    }
}
