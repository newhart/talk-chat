<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    // all provider authorize
    protected $providers = [ "google", "whatsapp", "facebook" ];

    // Redirect to the provider
    public function redirect (Request $request) {

        $provider = $request->provider;

        // verify if the provider is authorize
        if (in_array($provider, $this->providers)) {
            return Socialite::driver($provider)->redirect(); // redirect to provider
        }
        abort(404); // if the provider is not authorize
    }

    // Callback of provider
    public function callback (Request $request) {

        $provider = $request->provider;


        if (in_array($provider, $this->providers)) {

            $data = Socialite::driver($request->provider)->user();

            $email = $data->getEmail();
            $name = $data->getName();

            $user = User::where("email", $email)->first();


            if (isset($user)) {
                auth()->login($user);
            } else {
                $register = [
                    'name' => $data->getName(),
                    'email' => $data->getEmail()
                ];

                return Inertia::render('Auth/Register' , compact('register'));
            }

            auth()->login($user);

        }
        abort(404);
    }
}
