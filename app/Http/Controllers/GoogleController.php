<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use App\User;
use App\User_Role;

class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        // 1 check if the user exists in our database with facebook_id
        // 2 if not create a new user
        // 3 login this user into our application

        $socialUser = Socialite::driver('google')->stateless()->user();
        $user = User::where('provider_id', $socialUser->getId())->first();
        
        if($user)
        {
            auth()->login($user);
            return redirect()->to('/');
        }
        else if(!$user)
        {
            $user = new User;
            $user->name = $socialUser->getName();
            $user->email = $socialUser->getEmail();
            $user->provider = 'Google';
            $user->provider_id = $socialUser->getId();
            $user->save();

            $roleuser = new User_Role;
            $roleuser->user_id = $user->id;
            $roleuser->role_id = 2;
            $roleuser->save();

            auth()->login($user);
            return redirect()->to('/');
        }
    }
}
