<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    use WithoutModelEvents; // Use this trait to disable model events while seeding.

    /**
     * Run the database seeds.
     */
    public function run()
    {
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'user']);
    }
}
