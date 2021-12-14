<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Office as office;
use App\Models\User;
use App\Models\UserInformation;

class SchoolOffice extends Component
{
    public $name;
    public $email;
    public $office_id;
    public $addmodal = false;
    public $manageslider = false;
    public function render()
    {
        return view('livewire.admin.school-office',[
            'offices'  => office::get(),
        ]);

    }
    
    public function updated($propertyName){
        $this->validateOnly($propertyName, [
            'name' => 'required',
        ]);
    }

    public function addOffice(){
        $this->addmodal = true;
        $this->name = null;
    }

    public function saveOffice(){
        office::create([
            'office_name' => $this->name,
            'campus_id' => 1,
        ]);
            $this->dispatchBrowserEvent('notify', ['type' => 'Success' ,'message' => 'Offices added successfully.']);
            $this->name = null;
            $this->addmodal = false;
        }

        public function manage($id){
             $data = office::find($id);
             $this->office_id = $id;
            $this->manageslider = true;
            $this->name = $data->office_name;
           $this->emit('manageuser', $data->id);

        }
        
       
}
