<?php

namespace App\Http\Livewire\Evaluation\Sections;

use App\Models\InterventionMeasure;
use Livewire\Component;

class SectionFive extends Component
{

    public $removaled, $removal, $removalSuggestion;
    public $replacements, $replacement, $replacementSuggestion;
    public $engineeringControls, $engineeringControl, $engineeringControlSuggestion;
    public $administrativeControls, $administrativeControl, $administrativeControlSuggestion;
    public $personalProtections, $personalProtection, $personalProtectionSuggestion;

    protected $listeners = ['nextPosition5','previousPosition5'];

    protected $rules = [
        'removal'                           => 'required',
        'removalSuggestion'                 => 'required',
        'replacement'                       => 'required',
        'replacementSuggestion'             => 'required',
        'engineeringControl'                => 'required',
        'engineeringControlSuggestion'      => 'required',
        'administrativeControl'             => 'required',
        'administrativeControlSuggestion'   => 'required',
        'personalProtection'                => 'required',
        'personalProtectionSuggestion'      => 'required',
    ];

    public function mount($sectionRemoval, $sectionRemovalSuggestion, $sectionReplacement, $sectionReplacementSuggestion, $sectionEngineeringControl,
        $sectionEngineeringSuggestion, $sectionAdministrativeControl, $sectionAdministrativeSuggestion, $sectionPersonalProtection, $sectionProtectionSuggestion)
    {

        $this->removaled = InterventionMeasure::where('name', 'Eliminacion')->get();
        $this->replacements = InterventionMeasure::where('name', 'Sustitucion')->get();
        $this->engineeringControls = InterventionMeasure::where('name', 'Controles de ingenieria')->get();
        $this->administrativeControls = InterventionMeasure::where('name', 'Controles administrativos, señalización, advertencia')->get();
        $this->personalProtections = InterventionMeasure::where('name', 'Equipo / elementos de protección personal')->get();



        $this->removal = $sectionRemoval;
        $this->removalSuggestion = $sectionRemovalSuggestion;
        $this->replacement = $sectionReplacement;
        $this->replacementSuggestion = $sectionReplacementSuggestion;
        $this->engineeringControl = $sectionEngineeringControl;
        $this->engineeringControlSuggestion = $sectionEngineeringSuggestion;
        $this->administrativeControl = $sectionAdministrativeControl;
        $this->administrativeControlSuggestion = $sectionAdministrativeSuggestion;
        $this->personalProtection = $sectionPersonalProtection;
        $this->personalProtectionSuggestion = $sectionProtectionSuggestion;
    }
    public function nextPosition5()
    {
        $this->validate();

        $this->emit('sectionFive', [
            'removal' => $this->removal,
            'removalSuggestion' => $this->removalSuggestion,
            'replacement' => $this->replacement,
            'replacementSuggestion' => $this->replacementSuggestion,
            'engineeringControl' => $this->engineeringControl,
            'engineeringControlSuggestion' => $this->engineeringControlSuggestion,
            'administrativeControl' => $this->administrativeControl,
            'administrativeControlSuggestion' => $this->administrativeControlSuggestion,
            'personalProtection' => $this->personalProtection,
            'personalProtectionSuggestion' => $this->personalProtectionSuggestion,
        ]);
        $this->emit('increasePosition');
    }
    public function previousPosition5()
    {
        $this->emit('decreasePosition');

    }

    public function render()
    {
        return view('livewire.evaluation.sections.section-five');
    }
}
