<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
            'name'=> 'User',
            'email'=> 'user@imperials.com',
            'password' => bcrypt('123456'),
            'role' => 0
             ],
             [
            'name'=> 'Admin',
            'email'=> 'admin@imperials.com',
            'password' => bcrypt('123456'),
            'role' => 1
            ]
            ];
            foreach($users as $user)
            {
                User::create($user);
            }
            }
        }
