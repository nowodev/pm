<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            ['name' => 'can view manager'],
            ['name' => 'can view teller'],
            ['name' => 'can view customer'],
            ['name' => 'can create manager'],
            ['name' => 'can create teller'],
            ['name' => 'can create customer'],
            ['name' => 'can update manager'],
            ['name' => 'can update teller'],
            ['name' => 'can update customer'],
            ['name' => 'can delete manager'],
            ['name' => 'can delete teller'],
            ['name' => 'can delete customer'],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
