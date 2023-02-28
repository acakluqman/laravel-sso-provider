<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id_user' => Str::uuid(),
                'username' => 'acakluqman',
                'name' => 'Luqman Hakim',
                'email' => 'luqmanhakem922@gmail.com',
                'password' => Hash::make('luQman.10')
            ],
            [
                'username' => 'adabiyyah',
                'name' => 'Nadiyatul Adabiyyah',
                'email' => 'nadiyatuladabiyyah@gmail.com',
                'password' => Hash::make('adabiyyah@2310')
            ]
        ];

        $role = Role::create(['name' => 'Everyone']);

        foreach ($users as $row) {
            $user = User::create($row);
            $permissions = Permission::pluck('id', 'id')->all();
            $role->givePermissionTo($permissions);
            $user->assignRole([$role->id]);
        }
    }
}
