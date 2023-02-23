<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Luqman Hakim',
            'email' => 'luqmanhakem922@gmail.com',
            'password' => Hash::make('luQman.10')
        ]);
        User::create([
            'name' => 'Nadiyatul Adabiyyah',
            'email' => 'nadiyatuladabiyyah@gmail.com',
            'password' => Hash::make('adabiyyah@2310')
        ]);
    }
}
