<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

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
            ['name' => 'home'],
            ['name' => 'account.index'],
        ];

        foreach ($permissions as $perm) {
            Permission::create($perm);
        }
    }
}
