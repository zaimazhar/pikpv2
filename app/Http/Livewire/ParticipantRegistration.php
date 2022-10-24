<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ParticipantRegistration extends Component
{
    public function mount()
    {
        ray("dapat");
    }

    public function render()
    {
        return view('livewire.participant-registration');
    }
}
