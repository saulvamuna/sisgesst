<?php

namespace App\Http\Livewire\Evaluation;

use App\Models\Activity;
use App\Models\Evaluation;
use App\Models\Process;
use App\Models\Task;
use Livewire\Component;

class CreateEvaluation extends Component
{
    public $processId;
    public $sectionPosition = 1;

    //Variables de la seccion 1
    public $activityId, $activityName, $taskId, $dangerClassification, $dangerDescription;

    //Variables de la seccion 2
    public $danger, $effects, $source, $means, $individual;

    //Variables de la seccion 3
    public $deficiencyLevel, $deficiencyValue, $exposureLevel, $exposureValue, $probabilityLevel, $probabilityValue, $consequenceLevel, $consequenceValue,
        $interventionLevel, $interventionValue, $interventionName, $riskAceptavility;

    //Variables de la seccion 4
    public $linked, $contractor, $temporary, $time;

    //Variables de la seccion 5
    public $removal, $removalSuggestion, $replacement, $replacementSuggestion, $engineeringControl, $engineeringControlSuggestion,
        $administrativeControl, $administrativeControlSuggestion, $personalProtection, $personalProtectionSuggestion;

    //Variables de la seccion 6
    public $legal;

    protected $listeners = [
        'increasePosition',
        'decreasePosition',
        'sectionOne',
        'sectionTwo',
        'sectionThree',
        'sectionFour',
        'sectionFive',
        'sectionSix',
        'save',

    ];

    public function mount($id)
    {
        $this->processId = $id;
    }

    //metodos para cambiar de posicion en las secciones
    public function increasePosition()
    {
        if ($this->sectionPosition < 6) {
            $this->sectionPosition++;
        }
    }

    public function decreasePosition()
    {
        if ($this->sectionPosition > 1) {
            $this->sectionPosition--;
        }
    }

    public function nextSection()
    {
        $this->emit('nextPosition' . $this->sectionPosition);
    }
    public function previousSection()
    {
        $this->emit('previousPosition' . $this->sectionPosition);
    }

    //metodos para recibir la informacion de las secciones
    public function sectionOne($dataOne)
    {
        $this->activityId = $dataOne['activityId'];
        $this->taskId = $dataOne['taskId'];
        $this->dangerClassification = $dataOne['dangerClassification'];
        $this->dangerDescription = $dataOne['dangerDescription'];
    }

    public function sectionTwo($dataTwo)
    {
        $this->danger = $dataTwo['danger'];
        $this->effects = $dataTwo['effects'];
        $this->source = $dataTwo['source'];
        $this->means = $dataTwo['means'];
        $this->individual = $dataTwo['individual'];
    }
    public function sectionThree($dataThree)
    {
        $this->deficiencyLevel = $dataThree['deficiencyLevel'];
        $this->deficiencyValue = $dataThree['deficiencyValue'];
        $this->exposureLevel = $dataThree['exposureLevel'];
        $this->exposureValue = $dataThree['exposureValue'];
        $this->probabilityLevel = $dataThree['probabilityLevel'];
        $this->probabilityValue = $dataThree['probabilityValue'];
        $this->consequenceLevel = $dataThree['consequenceLevel'];
        $this->consequenceValue = $dataThree['consequenceValue'];
        $this->interventionLevel = $dataThree['interventionLevel'];
        $this->interventionValue = $dataThree['interventionValue'];
        $this->interventionName = $dataThree['interventionName'];
        $this->riskAceptavility = $dataThree['riskAceptavility'];
    }
    public function sectionFour($dataFour)
    {
        $this->linked = $dataFour['linked'];
        $this->contractor = $dataFour['contractor'];
        $this->temporary = $dataFour['temporary'];
        $this->time = $dataFour['time'];
    }

    public function sectionFive($dataFive)
    {
        $this->removal = $dataFive['removal'];
        $this->removalSuggestion = $dataFive['removalSuggestion'];
        $this->replacement = $dataFive['replacement'];
        $this->replacementSuggestion = $dataFive['replacementSuggestion'];
        $this->engineeringControl = $dataFive['engineeringControl'];
        $this->engineeringControlSuggestion = $dataFive['engineeringControlSuggestion'];
        $this->administrativeControl = $dataFive['administrativeControl'];
        $this->administrativeControlSuggestion = $dataFive['administrativeControlSuggestion'];
        $this->personalProtection = $dataFive['personalProtection'];
        $this->personalProtectionSuggestion = $dataFive['personalProtectionSuggestion'];
    }
    public function sectionSix($dataSix)
    {
        $this->legal = $dataSix;
    }

    public function save()
    {
        $evaluation = Evaluation::create([
            'task_id' => $this->taskId,
            'danger_classification' => $this->dangerClassification,
            'id_danger_description' => $this->dangerDescription,
            'danger' => $this->danger,
            'possible_effects' => $this->effects,
            'source' => $this->source,
            'means' => $this->means,
            'individual' => $this->individual,
            'id_deficiency_level' => $this->deficiencyLevel,
            'id_exposure_level' => $this->exposureLevel,
            'id_probability_level' => $this->probabilityLevel,
            'value_probability_level' => $this->probabilityValue,
            'id_consequence_level' => $this->consequenceLevel,
            'id_intervention_risk_level' => $this->interventionLevel,
            'risk_level_interpretation' => $this->interventionName,
            'id_risk_acceptability' => $this->riskAceptavility,
            'linked' => $this->linked,
            'contractors' => $this->contractor,
            'temporary' => $this->temporary,
            'exposure_time' => $this->time,
            'legal_requirement' => $this->legal,
            'evaluator' => auth()->user()->name,
        ]);

        $evaluation->interventionMeasures()->attach($this->removal, ['suggestion' => $this->removalSuggestion]);
        $evaluation->interventionMeasures()->attach($this->replacement, ['suggestion' => $this->replacementSuggestion]);
        $evaluation->interventionMeasures()->attach($this->engineeringControl, ['suggestion' => $this->engineeringControlSuggestion]);
        $evaluation->interventionMeasures()->attach($this->administrativeControl, ['suggestion' => $this->administrativeControlSuggestion]);
        $evaluation->interventionMeasures()->attach($this->personalProtection, ['suggestion' => $this->personalProtectionSuggestion]);

        $queryTask = new Task;
        $queryActicity = new Activity;

        $queryTask::where('id', $this->taskId)->update([
            'status' => 'Evaluado',
        ]);

        $taskStatus = $queryTask::where('status', 'sin evaluar')
            ->where('activity_id', $this->activityId)
            ->get();
        if (count($taskStatus) == 0) {
            $queryActicity::where('id', $this->activityId)->update([
                'status' => 'Evaluado',
            ]);
        }

        $activityStatus = $queryActicity::where('status', 'sin evaluar')
            ->where('process_id', $this->processId)
            ->get();

        if (count($activityStatus) == 0) {
            Process::where('id', $this->processId)->update([
                'status' => 'Evaluado',
            ]);
        }

        $this->emit('alert');
        return redirect()->route('create-evaluation', ['id' => $this->processId]);
    }
    public function render()
    {
        return view('livewire.evaluation.create-evaluation');
    }
}
