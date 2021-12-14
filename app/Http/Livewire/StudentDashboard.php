<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Office;
use App\Models\Concern;

class StudentDashboard extends Component
{
    use withFileUploads;
    public $attachments = [];
    public $addpost = false;
    
    //POST
    public $content;
    public $office_id;
    public $office_name;


    public function render()
    {
        return view('livewire.student-dashboard',[
            'offices' => Office::get(),
            'queries' => Concern::get(),
        ]);
    }

    public function add(){
        $this->addpost = true;
    }

    public function post(){
        $this->addpost = false;
         if ($this->attachments == null) {
              Concern::create([
            'content' => $this->content,
            'office_id' => $this->office_id,
            'user_id' => auth()->user()->id,
            'hasMedia' => false
        ]);
         }else{

            foreach ($this->attachments as $image) {
                dd($image->getType());
                \Illuminate\Support\Facades\Storage::disk('google')->getAdapter()->write(auth()->user()->userinformation->folder_id .'/'.$image->getClientOriginalName(), $image->readStream(), new \League\Flysystem\Config([]));


            };
            
             Concern::create([
            'content' => $this->content,
            'office_id' => $this->office_id,
            'user_id' => auth()->user()->id,
            'hasMedia' => true,
             ]);

             
         }
         $this->dispatchBrowserEvent('notify', ['type' => 'Success' ,'message' => 'Post Added.']);
      

    }

    public function selectOffice($id){
        $this->office_id = $id;
        $data = Office::find($id);
        $this->office_name = $data->office_name;

    }
}
