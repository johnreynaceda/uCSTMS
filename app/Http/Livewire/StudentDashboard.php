<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Office;
use App\Models\Concern;
use App\Models\Media;

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
        return view('livewire.student-dashboard', [
            'offices' => Office::get(),
            'queries' => Concern::withCount('feedbacks')->get(),
        ]);
    }

    public function add()
    {

        $this->addpost = true;
    }

    public function post()
    {
        $this->addpost = false;
        if ($this->attachments == null) {
            Concern::create([
                'content' => $this->content,
                'office_id' => $this->office_id,
                'user_id' => auth()->user()->id,
                'hasMedia' => false
            ]);
        } else {

            $concern = Concern::create([
                'content' => $this->content,
                'office_id' => $this->office_id,
                'user_id' => auth()->user()->id,
                'hasMedia' => true,
            ]);

            foreach ($this->attachments as $image) {
                $upload =   \Storage::disk('google')->getAdapter()->write(auth()->user()->userinformation->folder_id . '/' . $image->getClientOriginalName(), $image->readStream(), new \League\Flysystem\Config([]));

                $path = explode('/', $upload['path']);
                $data = explode('.', $image->getClientOriginalName());
                switch ($data[1]) {
                    case 'jpg':
                        Media::create([
                            'concern_id' => $concern->id,
                            'type' => 'photos',
                            'filename' => $path[1],
                        ]);
                        break;
                    case 'jpeg':
                        Media::create([
                            'concern_id' => $concern->id,
                            'type' => 'photos',
                            'filename' => $path[1],
                        ]);
                        break;
                    case 'docx':
                        Media::create([
                            'concern_id' => $concern->id,
                            'type' => 'file',
                            'filename' => $path[1],
                        ]);
                        break;

                    default:
                        # code...
                        break;
                }
                //    // \Illuminate\Support\Facades\Storage::disk('google')->getAdapter()->write( '1HpCmDSekPS6lgEWP0ej-PvOpJdvoPY4r'.'/'.$image->getClientOriginalName(), $image->readStream(), new \League\Flysystem\Config([]));
                //    \Storage::disk('google')->getAdapter()->write(auth()->user()->userinformation->folder_id.'/'. $image->getClientOriginalName() , $image->readStream(), new \League\Flysystem\Config([]));

            };
        }




        $this->dispatchBrowserEvent('notify', ['type' => 'Success', 'message' => 'Post Added.']);
    }

    public function selectOffice($id)
    {
        $this->office_id = $id;
        $data = Office::find($id);
        $this->office_name = $data->office_name;
    }
}
