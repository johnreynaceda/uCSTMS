<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AppointmentSchedule;

class OfficeManageAppointment extends Component
{
    public function render()
    {
        return view('livewire.office-manage-appointment', [
            'schedules' => AppointmentSchedule::where('office_id', auth()->user()->userinformation->office->id)->get(),
        ]);
    }

    public function back()
    {
        redirect()->route('office-calendar');
    }
}
