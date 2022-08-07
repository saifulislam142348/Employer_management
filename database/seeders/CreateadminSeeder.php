<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateadminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        $users = [
            
               'name'=>'Admin User',
               'email'=>'admin@gmail.com',
               'type'=>admin,
               'password'=> bcrypt('12345678'),
            
           
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }


    }
}
