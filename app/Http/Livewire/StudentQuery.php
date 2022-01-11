<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Concern;
use App\Models\Feedback;

class StudentQuery extends Component
{
    public $query_id;
    public $content;

    public function mount($id)
    {
        $this->query_id = $id;
    }
    public function render()
    {
        return view('livewire.student-query', [
            'queries' => Concern::where('id', $this->query_id)->withCount('feedbacks')->get(),
            'feedbacks' => Feedback::where('concern_id', $this->query_id)->orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function send()
    {
        Feedback::create([
            'concern_id' => $this->query_id,
            'fromOffice' => false,
            'content' => $this->content,
            'user_id' => auth()->user()->id,
        ]);
        $this->content = "";
    }
}
