<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

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
        Validator::make($input, [
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'birthday' => [
                'required',
                'date',
            ],
            'gender' => [
                'required',
                'in:male,female',
            ],
            'username' => [
                'required',
                'alpha_dash',
                'max:50',
                Rule::unique(User::class, 'username'),
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class, 'email'),
            ],
            'terms' => [
                'required',
                'accepted',
            ],
            'password' => [
                'confirmed',
                $this->passwordRules(),
            ]
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        $user->profile()->create([
            'birthday' => $input['birthday'],
            'gender' => $input['gender'],
        ]);

        return $user;
    }
}
