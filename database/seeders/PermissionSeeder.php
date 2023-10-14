<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'read dashboard/admin'])->assignRole('admin');
        Permission::create(['name' => 'create setting/roles'])->assignRole('admin');
        Permission::create(['name' => 'read setting/roles'])->assignRole('admin');
        Permission::create(['name' => 'update setting/roles'])->assignRole('admin');
        Permission::create(['name' => 'delete setting/roles'])->assignRole('admin');
        Permission::create(['name' => 'create setting/permissions'])->assignRole('admin');
        Permission::create(['name' => 'read setting/permissions'])->assignRole('admin');
        Permission::create(['name' => 'update setting/permissions'])->assignRole('admin');
        Permission::create(['name' => 'delete setting/permissions'])->assignRole('admin');
        Permission::create(['name' => 'create setting/users'])->assignRole('admin');
        Permission::create(['name' => 'read setting/users'])->assignRole('admin');
        Permission::create(['name' => 'update setting/users'])->assignRole('admin');
        Permission::create(['name' => 'delete setting/users'])->assignRole('admin');
        Permission::create(['name' => 'create setting/userroles'])->assignRole('admin');
        Permission::create(['name' => 'read setting/userroles'])->assignRole('admin');
        Permission::create(['name' => 'update setting/userroles'])->assignRole('admin');
        Permission::create(['name' => 'delete setting/userroles'])->assignRole('admin');
        Permission::create(['name' => 'create setting/userpermissions'])->assignRole('admin');
        Permission::create(['name' => 'read setting/userpermissions'])->assignRole('admin');
        Permission::create(['name' => 'update setting/userpermissions'])->assignRole('admin');
        Permission::create(['name' => 'delete setting/userpermissions'])->assignRole('admin');
        Permission::create(['name' => 'create setting/sections'])->assignRole('admin');
        Permission::create(['name' => 'read setting/sections'])->assignRole('admin');
        Permission::create(['name' => 'update setting/sections'])->assignRole('admin');
        Permission::create(['name' => 'delete setting/sections'])->assignRole('admin');
        Permission::create(['name' => 'create setting/diagnostics'])->assignRole('admin');
        Permission::create(['name' => 'read setting/diagnostics'])->assignRole('admin');
        Permission::create(['name' => 'update setting/diagnostics'])->assignRole('admin');
        Permission::create(['name' => 'delete setting/diagnostics'])->assignRole('admin');
        Permission::create(['name' => 'create setting/forms'])->assignRole('admin');
        Permission::create(['name' => 'read setting/forms'])->assignRole('admin');
        Permission::create(['name' => 'update setting/forms'])->assignRole('admin');
        Permission::create(['name' => 'delete setting/forms'])->assignRole('admin');
        Permission::create(['name' => 'create setting/formitems'])->assignRole('admin');
        Permission::create(['name' => 'read setting/formitems'])->assignRole('admin');
        Permission::create(['name' => 'update setting/formitems'])->assignRole('admin');
        Permission::create(['name' => 'delete setting/formitems'])->assignRole('admin');

        Permission::create(['name' => 'read dashboard/guru'])->assignRole('guru');
        Permission::create(['name' => 'create diagnostic/testsections'])->assignRole('guru');
        Permission::create(['name' => 'read diagnostic/testsections'])->assignRole('guru');
        Permission::create(['name' => 'update diagnostic/testsections'])->assignRole('guru');
        Permission::create(['name' => 'delete diagnostic/testsections'])->assignRole('guru');
        Permission::create(['name' => 'create diagnostic/testresults'])->assignRole('guru');
        Permission::create(['name' => 'read diagnostic/testresults'])->assignRole('guru');
        Permission::create(['name' => 'update diagnostic/testresults'])->assignRole('guru');
        Permission::create(['name' => 'delete diagnostic/testresults'])->assignRole('guru');

    }
}
