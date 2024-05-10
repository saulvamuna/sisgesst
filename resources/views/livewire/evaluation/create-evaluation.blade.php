<div class="w-full overflow-hidden py-8" style="height: 93vh">
    <x-content-block>

        @if ($sectionPosition == 1)
            @livewire('evaluation.sections.section-one', [
                'id' => $processId,
                'sectionActivityId' => $activityId,
                'sectionTaskId' => $taskId,
                'sectionDangerClassification' => $dangerClassification,
                'sectionDangerDescription' => $dangerDescription,
            ])
        @elseif ($sectionPosition == 2)
            @livewire('evaluation.sections.section-two', [
                'sectionDanger' => $danger,
                'sectionEffects' => $effects,
                'sectionSource' => $source,
                'sectionMeans' => $means,
                'sectionIndividual' => $individual,
            ])
        @elseif ($sectionPosition == 3)
            @livewire('evaluation.sections.section-three', [
                'sectionDeficiencyLevel' => $deficiencyLevel,
                'sectionDeficiencyValue' => $deficiencyValue,
                'sectionExposureLevel' => $exposureLevel,
                'sectionExposureValue' => $exposureValue,
                'sectionProbabilityValue' => $probabilityValue,
                'sectionConsequenceLevel' => $consequenceLevel,
                'sectionConsequenceValue' => $consequenceValue,
                'sectionInterventionValue' => $interventionValue,
                'sectionInterventionName' => $interventionName,
            ])
        @elseif ($sectionPosition == 4)
            @livewire('evaluation.sections.section-four', [
                'sectionLinked' => $linked,
                'sectionContractor' => $contractor,
                'sectionTemporary' => $temporary,
                'sectionTime' => $time,
            ])
        @elseif ($sectionPosition == 5)
            @livewire('evaluation.sections.section-five', [
                'sectionRemoval' => $removal,
                'sectionRemovalSuggestion' => $removalSuggestion,
                'sectionReplacement' => $replacement,
                'sectionReplacementSuggestion' => $replacementSuggestion,
                'sectionEngineeringControl' => $engineeringControl,
                'sectionEngineeringSuggestion' => $engineeringControlSuggestion,
                'sectionAdministrativeControl' => $administrativeControl,
                'sectionAdministrativeSuggestion' => $administrativeControlSuggestion,
                'sectionPersonalProtection' => $personalProtection,
                'sectionProtectionSuggestion' => $personalProtectionSuggestion,
            ])
        @elseif ($sectionPosition == 6)
            @livewire('evaluation.sections.section-six')
        @endif


        @if ($sectionPosition == 1)
            <button wire:click="nextSection"
                class="bg-green-600 py-2 px-4 rounded-lg text-gray-200 font-semibold absolute bottom-6 right-20 z-50">Siguiente</button>
        @elseif($sectionPosition == 6)
            <button wire:click="previousSection"
                class="bg-gray-600 py-2 px-4 rounded-lg text-gray-200 font-semibold absolute bottom-6 left-20 z-50">Atras</button>
            {{-- <progress class="absolute bottom-10 left-56 w-4/6 rounded-full" value="{{$sectionPosition}}" max="5"></progress> --}}
            <button wire:click="nextSection"
                class="bg-green-600 py-2 px-4 rounded-lg text-gray-200 font-semibold absolute bottom-6 right-20 z-50">Finalizar Evaluacion</button>
        @else
            <button wire:click="previousSection"
                class="bg-gray-600 py-2 px-4 rounded-lg text-gray-200 font-semibold absolute bottom-6 left-20 z-50">Atras</button>
            {{-- <progress class="absolute bottom-10 left-56 w-4/6 rounded-full" value="{{$sectionPosition}}" max="5"></progress> --}}
            <button wire:click="nextSection"
                class="bg-green-600 py-2 px-4 rounded-lg text-gray-200 font-semibold absolute bottom-6 right-20 z-50">Siguiente</button>
        @endif
    </x-content-block>
</div>
