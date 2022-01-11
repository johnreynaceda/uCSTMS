<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Feedback;
use App\Models\Concern;

class OpenQuery extends Component
{
    public $query_id;
    public $content;
    public function mount($id){
       $this->query_id = $id;
    }
    public function render()
    {
        return view('livewire.open-query',[
            'query' => Concern::where('id', $this->query_id)->first(),
            'feedbacks' => Feedback::where('concern_id', $this->query_id)->orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function back(){
        return redirect()->route('office-query');
    }

    public function send(){
        // dd('dfdfdf');
        Feedback::create([
            'concern_id' => $this->query_id,
            'fromOffice' => true,
            'content' => $this->content,
            'user_id' => auth()->user()->id,
        ]);
        $this->content = null;
    }
}
