<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleWebLogin extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')
        ->with(['prompt' => 'select_account', 'access_type' => 'offline'])
        ->redirect();
        //->with(['prompt' => 'select_account'])
    }

    public function handleGoogleCallback(){
        try{
            $googleUser=Socialite::driver('google')->stateless()->user();
        }catch(\GuzzleHttp\Exception\ClientException $e){
            if($e->getResponse()->getStatusCode()===400){
                return redirect()->route('google.redirect');
            }
        }
        // dd($googleUser->refreshToken);
        $user=User::where('email',$googleUser->email)->first();
        //dd($googleUser,$user);
        if(!$user){

             
             
            $user=User::create(['name'=>$googleUser->name,'email'=>$googleUser->email,'password'=> Hash::make(rand(100,100)),'remember_token'=>$googleUser->refreshToken]);
            
        }
        return(Auth::login($user));
         
         
    }

        
}
