<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'Sinhvien']); 
        Role::create(['name' => 'giangvien']); 
        Role::create(['name' => 'thuky']); 

    }
}
