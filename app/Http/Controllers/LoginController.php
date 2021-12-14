<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\UserInformation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
          
         try {

    
            $user = Socialite::driver('google')->user();
            
     
            $finduser = User::where('email', $user->email)->first();
            
            if($finduser){

                Auth::login($finduser);
                
                switch ($finduser->user_type_id) {
                    case 1:
                        return redirect('/admin');
                        break;
                    case 2:
                        return redirect('/office');
                        break;
                    case 3:
                        return redirect('/student');
                        break;
                    
                    default:
                         abort(404);
                        break;
                }
            }else{
               
                 $path = create_google_dir($user->email)['path'];

               $newuser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => Hash::make('password'),
                'user_type_id' => 3,
                // 'profile_photo_path' => $user->avatar,
               ]);

               UserInformation::create([
                'user_id' => $newuser->id,
                'campus_id' => 1,
                'folder_id' => str_replace('/','', $path),

               ]);
               
              
               auth()->login($newuser);
               return redirect('/student');
            }
           
    
        } catch (Exception $e) {
            
            abort(404);
        }
    }

   


}
