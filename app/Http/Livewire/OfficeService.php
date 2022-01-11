<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\StudentService;

class OfficeService extends Component
{
    public $service;
    public $link;
    public $addmodal = false;
    public function render()
    {
        return view('livewire.office-service', [
            'services' => StudentService::where('office_id', auth()->user()->userinformation->office_id)->get(),
        ]);
    }

    public function saveService()
    {
        StudentService::create([
            'service_name' => $this->service,
            'office_id' => auth()->user()->userinformation->office_id,
            'link' => $this->link,

        ]);

        $this->addmodal = false;
    }
}
