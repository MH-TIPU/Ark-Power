<?php

namespace App\Livewire;

use App\Models\Management;
use Livewire\Component;

class ManagementTabs extends Component
{
    public $activeTab = 'md'; // default tab is Managing Director
    public $managementData;
    public $currentData;

    public function mount()
    {
        // $this->loadManagementData();

        $this->managementData = Management::take(2)->get(); // Fetch only the first two records
        $this->setTab('md'); // Set the default tab
    }

    public function setTab($tab)
    {
        $this->activeTab = $tab;
        // $this->loadManagementData();

        // Set the current data based on the active tab
        if ($tab === 'md') {
            $this->currentData = $this->managementData->first(); // First record for Managing Director
        } elseif ($tab === 'ceo' && $this->managementData->count() > 1) {
            $this->currentData = $this->managementData->get(1); // Second record for CEO
        } else {
            $this->currentData = null; // Handle cases where data is not available
        }
    }

    // public function loadManagementData()
    // {
    //     $this->managementData = Management::where('designation', $this->activeTab === 'md' ? 'Managing Director' : 'Chief Executive Officer')->first();
    // }

    public function render()
    {
        return view('livewire.management-tabs');
    }
}
