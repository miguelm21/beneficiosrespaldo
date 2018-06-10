<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use JWTAuth;
use Auth;
use App\User;
use App\User_Role;

class ApiGoogleController extends Controller
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
    public function handleProviderCallback(Request $request)
    {
        // 1 check if the user exists in our database with facebook_id
        // 2 if not create a new user
        // 3 login this user into our application

        /*$socialUser = Socialite::driver('google')->stateless()->user();*/
        $user = User::where('provider_id', $request->id)->first();

        /*if(!$user)
        {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->provider = 'Google';
            $user->provider_id = $request->id;
            $user->save();

            $roleuser = new User_Role;
            $roleuser->user_id = $user->id;
            $roleuser->role_id = 2;
            $roleuser->save();

            $token = auth()->login($user);

            return response()->json(['token' => $token], 200);
        }
        else
        {*/
            try
            {
                $token = JWTAuth::fromUser($user);

                if(!$token)
                {
                	$user = new User;
    	            $user->name = $request->name;
    	            $user->email = $request->email;
    	            $user->provider = 'Google';
    	            $user->provider_id = $request->id;
    	            $user->save();

    	            $roleuser = new User_Role;
    	            $roleuser->user_id = $user->id;
    	            $roleuser->role_id = 2;
    	            $roleuser->save();

    	            $token = auth()->login($user);

                	return response()->json(['token' => $token], 200);
                }
            }
            catch(JWTException $e)
            {
                return response()->json(['error' => 'Ocurrio un error'], 500);
            }
            return response()->json(['token' => $token], 200);
        /*}*/
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => 3600 * 60
        ]);
    }
}
