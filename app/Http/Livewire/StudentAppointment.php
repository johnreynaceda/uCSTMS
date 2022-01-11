<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Office;

class StudentAppointment extends Component
{
    public function render()
    {
        return view('livewire.student-appointment', [
            'offices' => Office::get(),
        ]);
    }
}
