<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleWebLogin extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
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
        //dd($googleUser);
        $user=User::where('email',$googleUser->email)->first();
        //dd($googleUser,$user);
        if(!$user){

             
             
            $user=User::create(['name'=>$googleUser->name,'email'=>$googleUser->email,'password'=> Hash::make(rand(100,100))]);
            
        }
        Auth::login($user);
        session()->put('user',$user);
        return $user;
    }
}
