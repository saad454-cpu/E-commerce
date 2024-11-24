<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name'=> "abderrahime loukili",
            'email'=>"rrayane716@gmail.com",
            'email_verified_at' => now(),
            'password'=>Hash::make("123456789"),
            'remember_token' => Str::random(10),
        ];
    }
}
