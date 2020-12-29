<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\DummyUsersSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

        public function run()
        {
            $userData = [
                [
                   'name'=>'admin',
                   'email'=>'admin@gmail.com',
                    'is_admin'=>'1',
                   'password'=> bcrypt('password123'),
                ],
                [
                   'name'=>'user1',
                   'email'=>'user@gmail.com',
                    'is_admin'=>'0',
                   'password'=> bcrypt('password123'),
                ],
            ];
      
            foreach ($userData as $key => $val) {
                User::create($val);
            }
        }
    }
