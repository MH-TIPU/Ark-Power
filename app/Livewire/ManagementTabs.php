<?php

namespace App\Livewire;

use Livewire\Component;

class ManagementTabs extends Component
{
    public $activeTab = 'md'; // default tab is Managing Director

    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function render()
    {
        return view('livewire.management-tabs');
    }
}
