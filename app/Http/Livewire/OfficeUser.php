<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\UserInformation;
use Illuminate\Support\Facades\Hash;


class OfficeUser extends Component
{
    public $office_id; 
     public $email;
    protected $listeners = ['manageuser' => 'getUser'];
  
    public function getUser($id){
        $this->office_id = $id;
    }

    public function render()
    {
    //   dd($this->office_id);
        return view('livewire.office-user',[
            'users' => User::where('user_type_id', 2)->whereHas('userinformation', function($k){
                $k->where('office_id', $this->office_id);
            })->get(),
        ]);
    }

     public function useradd(){
             $validatedData = $this->validate([
            'email' => 'required|email',
        ]);
        $user = User::create([
            'name' => $this->email,
            'email' => $this->email,
            'password' => Hash::make('password'),
            'user_type_id' => 2,
        ]);
        UserInformation::create([
            'user_id' => $user->id,
            'campus_id' => 1,
            'office_id' => $this->office_id,
        ]);
        $this->email = null;
        $this->emit('add');
        }
}
