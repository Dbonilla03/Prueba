<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Juan Diego Bonilla Aroca',
            'email' => 'bonillaaroca97@gmail.com',
             'password' => bcrypt('12345678')
       ])->assignRole('Admin');

       User::create([
        'name' => 'Alejo',
        'email' => 'alejomontoya099@gmail.com',
         'password' => bcrypt('12345678')
   ])->assignRole('Blogger');


       
    }
}




