<?php

namespace App\View\Components\shared;

use Illuminate\View\Component;
use App\Models\Office;

class sideoffice extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shared.sideoffice',[
            'offices' => Office::get(),
        ]);
    }
}
