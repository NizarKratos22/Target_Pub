<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Specclient extends Component
{
    public function render()
    {
        return view('livewire.specclient');
    }
    public function openAddReservationModal(){
        $this->dispatchBrowserEvent('openAddReservationModal');
    }
}
