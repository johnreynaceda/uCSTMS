<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AppointmentSchedule;
use Livewire\WithPagination;

class Appointment extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.appointment', [
            'schedules' => AppointmentSchedule::where('office_id', auth()->user()->userinformation->office_id)->paginate(8),
        ]);
    }
}
