<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Enums\UserType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => UserType::ADMIN->value],
            ['name' => UserType::MANAGER->value],
            ['name' => UserType::TELLER->value],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
