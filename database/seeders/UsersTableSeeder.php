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
        User::create([
            'name' => 'Admin',
            'email' => 'vivekkumar240898@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => '1'
        ]);

        User::create([
            'name' => 'Employer',
            'email' => 'vkr1118@barrownzgroup.com',
            'password' => bcrypt('12345678'),
            'role_id' => '2'
        ]);
          User::create([
            'name' => 'Employee',
            'email' => 'nma1138@barrownzgroup.com',
            'password' => bcrypt('12345678'),
            'role_id' => '3'
        ]);
    }
}
