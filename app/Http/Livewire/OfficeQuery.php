<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Concern;

class OfficeQuery extends Component
{
    public function render()
    {
        return view('livewire.office-query',[
            'queries' => Concern::where('office_id', auth()->user()->userinformation->office->id)->get(),
        ]);
    }
}
