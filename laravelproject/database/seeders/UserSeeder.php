<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@bmail.com',
                'password' => 'admin123',
                'role' => 'admin'
            ],
            [
                'name' => 'Minji',
                'email' => 'minji@bmail.com',
                'password' => 'minji123',
                'role' => 'user'
            ]
        ];

        foreach($users as $user){
            $newUser = User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => bcrypt($user['password']),
                'role' => $user['role']
            ]);
        }
    }
}
