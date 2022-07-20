<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'title' => 'Administrator',
            'short_code' => 'Admin',
        ]);

        Role::create([
            'title' => 'Employer',
            'short_code' => 'Employer',
        ]);
         Role::create([
            'title' => 'Employee',
            'short_code' => 'Employee',
        ]);
    }
}
