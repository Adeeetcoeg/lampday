<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            [
                'name' => 'Aditya Nugroho',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('inipassword'),
                'foto' => '/img/adeet.jpg',
                'level' => 1
            ],
            [
                'name' => 'Kasir',
                'email' => 'kasir1@gmail.com',
                'password' => bcrypt('inipassword'),
                'foto' => '/img/user.jpg',
                'level' => 2
            ]
        );

        array_map(function (array $user) {
            User::query()->updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }, $users);
    }
}
