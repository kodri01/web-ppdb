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
        //
        User::query()->truncate();
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.id',
            'password' => bcrypt('123123'),
        ]);
    }
}
