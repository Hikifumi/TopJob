<?php

use Illuminate\Database\Seeder;
use App\User;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Hi Admin',
            'role_name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Hi User',
            'role_name' => 'user',
            'email' => 'user@admin.com',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('user');
    }
}
