<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'user', 'guard_name' => 'web']);
        Role::create(['name' => 'admin','guard_name' => 'web']);
    }
}
