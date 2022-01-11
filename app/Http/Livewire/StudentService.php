<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Office;

class StudentService extends Component
{
    public function render()
    {
        return view('livewire.student-service', [
            'offices' => Office::get(),
        ]);
    }
}
