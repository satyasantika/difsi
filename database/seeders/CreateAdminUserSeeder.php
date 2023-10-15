<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
                'name' => 'Admin Sistem',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('asdfasdf')
            ]);

        $role = Role::create(['name' => 'admin']);

        $user->assignRole([$role->id]);

        $user = User::create([
                'name' => 'Guru Sample',
                'username' => 'guru',
                'email' => 'guru@gmail.com',
                'password' => bcrypt('1234')
            ]);

        $role = Role::create(['name' => 'guru']);

        $user->assignRole([$role->id]);

    }
}
