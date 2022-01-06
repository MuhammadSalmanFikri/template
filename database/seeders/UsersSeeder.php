<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
                'name' => "Bujang Palembang",
                'email' => 'premiumyout004@gmail.com',
                'email_verified_at' => '2022-01-03 04:36:40',
                'password' => bcrypt('asdasd1212'),
            ],
            [
                'name' => "Bujang Lampung",
                'email' => 'asd@gmail.com',
                'email_verified_at' => '2022-01-03 04:36:40',
                'password' => bcrypt('asd1212'),
            ],
        ];

        \DB::table('users')->insert($users);
    }
}
