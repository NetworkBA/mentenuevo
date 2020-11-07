<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

use Laravel\Socialite\Facades\Socialite;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
      // dd($input);

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();


        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
        /**
         * Redirect the user to the facebook authentication page.
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
            $user = Socialite::driver($driver)->user();
           // dd($user);
            $validar = User::findOrFail($user->email);
            dd('cc');
             if($validar){
                return User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => Hash::make($user->id),
                ]);
             }else{
                return response()->json([
                    'estatus' => 'Error',
                    'mensaje' => 'error','Ya existe una cuenta registrada con este correo.']);             
             }
        }    
}
