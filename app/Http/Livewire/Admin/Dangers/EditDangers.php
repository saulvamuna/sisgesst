<?php

namespace App\Http\Livewire\Admin\Dangers;

use App\Models\DangerDescription;
use Livewire\Component;

class EditDangers extends Component
{
    public $openDanger = false;
    public $openDeleteDanger = false;
    public $danger, $descriptions, $dangerId = [], $dangerDescription = [], $deleteDanger;

    protected $listeners = ['deleteConfirmeDanger'];

    protected $rules = [
        'dangerDescription.*' => 'required',
    ];

    public function mount($danger)
    {
        $this->danger = $danger;
        $this->dataDanger();
    }

    public function dataDanger()
    {
        $this->descriptions = DangerDescription::where('danger', $this->danger)->get();
        foreach($this->descriptions as $description){
            $this->dangerId[] = $description->id;
            $this->dangerDescription[] = $description->danger_description;
        }
    }

    public function saveDanger()
    {
        $this->validate();

        foreach ($this->descriptions as $index => $query) {
            $query->danger_description = $this->dangerDescription[$index];
            $query->save();
        }
        $this->reset('openDanger');
        $this->emit('renderDanger');
    }

    public function confirmDeleteDanger($position)
    {
        $this->deleteDanger = $position;
        $this->openDeleteDanger = true;
    }

    public function deleteConfirmeDanger()
    {
        if ($this->deleteDanger) {
            foreach ($this->descriptions as $index => $query) {
                if ($this->deleteDanger == $index) {
                    $query->id = $this->dangerId[$index];
                    $query->delete();
                }
            }
        }

        $this->emit('renderDanger');
        $this->openDeleteDanger = false;
        $this->openDanger = false;
        $this->dangerDescription = [];
        $this->dataDanger();
    }

    public function render()
    {
        return view('livewire.admin.dangers.edit-dangers');
    }
}
