<?php

namespace App\Http\Livewire\Admin\Dangers;

use App\Models\DangerDescription;
use Livewire\Component;

class DangersIndex extends Component
{
    public $dangerDescriptions;
    protected $listeners = ['renderDanger' => 'render', 'mountDanger' => 'mount'];

    public function mount()
    {
        $this->dangerDescriptions = DangerDescription::get();
    }

    public function render()
    {
        return view('livewire.admin.dangers.dangers-index');
    }
}
