<?php

namespace App\View\Components\shared;

use Illuminate\View\Component;
use App\Models\Concern;

class sidepost extends Component
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
        return view('components.shared.sidepost',[
            'concerns' => Concern::where('office_id', auth()->user()->userinformation->office_id)->orderBy('created_at','desc')->paginate(2),
        ]);
    }
}
