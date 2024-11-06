<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email','chowdhurysaumik@gmail.com')->first();

        if(is_null($user)){
            $user = new User();
            $user->name = "Saumik Chowdhury";
            $user->email = "chowdhurysaumik@gmail.com";
            $user->password = Hash::make('12345678');
            $user->save();
        };
        

    }
}
