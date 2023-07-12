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
               'name'=>'Student',
               'email'=>'student@mail.co',
               'type'=>0,
               'matno'=>'NA19/2023',
               'phone'=>'08176129429',
               'password'=> bcrypt('asdfasdf'),
            ],
            [
               'name'=>'Super Admin User',
               'email'=>'admin@mail.co',
               'type'=>1,
               'password'=> bcrypt('asdfasdf'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
