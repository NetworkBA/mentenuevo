<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\SocialProfile;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($driver)
    {
        return Socialite::driver($driver)->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($driver)
    {
        $userSocialite = Socialite::driver($driver)->user();

        $user = User::where('email',$userSocialite->email)->first();

        if(!$user){
            $user = User::create([
                'name' => $userSocialite->name,
                'email' => $userSocialite->email,
            ]);
        }

        $socialUser = SocialProfile::where('social_id',$userSocialite->getId())->first();

        if(!$socialUser){
            $socialUser = SocialProfile::create([
                'user_id'=>$user->id,
                'social_id'=>$userSocialite->getId(),
                'social_name'=>$driver,
                'social_avatar'=>$userSocialite->getAvatar()
            ]);
        }

        auth()->login($user);
        return redirect()->route('ejemploVDG');
    }    

    function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}