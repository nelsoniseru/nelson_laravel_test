<?php

namespace App\Api\V1\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;



class LoginController extends Controller
{
   
    public function redirectToProvider()
    {  
        return Socialite::driver('twitter')->redirect();
    }
    

    public function handleProviderCallback(Request $request)
    {
        //get the logged in user
        $twitterUser = Socialite::driver('twitter')->user();

           $this->saveUserToDatabase($twitterUser);

             $user = User::where('twitter_id', $twitterUser->id)->first();
            
             //save the user id in session
             session()->put(['app_id' =>$user['twitter_id']]);
             

         
         return response()->json([
            'user'=>$twitterUser,
        ]);
    
    }
    private function saveUserToDatabase($userData)
    {
        //save user to the database
        User::updateOrCreate(
            ['twitter_id' => $userData->id],
            [
                'name' => $userData->name,
                'email' => $userData->email ?? null,
                'password' =>$userData->password ?? null
            ]
        );
    }
    
}
