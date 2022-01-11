<?php

namespace App\Http\Livewire;

use App\Models\AppointmentSchedule;
use Asantibanez\LivewireCalendar\LivewireCalendar;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class AppointmentsCalendar extends LivewireCalendar
{
    public $isModalOpen = false;

    public $title;
    public $notes;
    public $start;
    public $end;
    public $slot;
    public $openevent = false;

    public $selectedAppointment = null;

    public $newAppointment;

    public function events(): Collection
    {
        return AppointmentSchedule::query()
            ->whereDate('start_date', '>=', $this->gridStartsAt)
            ->whereDate('start_date', '<=', $this->gridEndsAt)
            ->where('office_id', auth()->user()->userinformation->office_id)
            ->get()
            ->map(function (AppointmentSchedule $appointment) {
                return [
                    'id' => $appointment->id,
                    'title' => $appointment->title,
                    'notes' => $appointment->notes,
                    'date' => $appointment->start_date,
                ];
            });
    }

    public function unscheduledEvents(): Collection
    {
        return AppointmentSchedule::query()
            ->whereNull('start_date')
            ->get();
    }

    // public function onDayClick($year, $month, $day)
    // {
    //     $this->isModalOpen = true;

    //     $this->resetNewAppointment();
    // }

    public function addschedule()
    {
        $this->isModalOpen = true;

        $this->resetNewAppointment();
    }

    public function saveAppointment()
    {
        AppointmentSchedule::create([
            'office_id' => auth()->user()->userinformation->office_id,
            'title' => $this->title,
            'notes' => $this->notes,
            'start_date' => $this->start,
            'end_date' => $this->end,
            'slot' => $this->slot,
        ]);

        $this->isModalOpen = false;
    }

    public function onEventDropped($eventId, $year, $month, $day)
    {
        $appointment = AppointmentSchedule::find($eventId);
        $appointment->start_date = Carbon::today()->setDate($year, $month, $day);
        $appointment->save();
    }

    private function resetNewAppointment()
    {
        $this->newAppointment = [
            'title' => '',
            'notes' => '',
            'scheduled_at' => '',
            'priority' => 'normal',
        ];
    }

    public function onEventClick($eventId)
    {
        // $this->selectedAppointment = Appointment::find($eventId);
        $this->openevent = true;
    }

    public function unscheduleAppointment()
    {
        $appointment = AppointmentSchedule::find($this->selectedAppointment['id']);
        $appointment->start_at = null;
        $appointment->save();

        $this->selectedAppointment = null;
    }

    public function closeAppointmentDetailsModal()
    {
        $this->selectedAppointment = null;
    }

    public function deleteEvent($eventId)
    {
        $appointment = Appointment::find($eventId);
        $appointment->delete();
    }

    public function render()
    {
        return parent::render()->with([
            'unscheduledEvents' => $this->unscheduledEvents()
        ]);
    }
}
