<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=>'Jeritta chibhabha',
            'email'=>'jerritachibhabha@gmail.com',
            'password'=>Hash::make('#pass123'),
            'email_verified_at'=>'2020-05-20 00:00:00',
            'remember_token'=>'jVhuxKnPjp7v6mCefkjas9SVgtyiuqGSGg0tAN1oPyFRoOOAuOtaNW5QPaBC'
        ]);

    }
}
