<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Laravel\Passport\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'id' => '9892c67e-24be-428d-8725-3203cf344a8e',
            'name' => 'SSO Client 1',
            'secret' => '3BQQxlyfCfMskqkeX5bcqih5ahLmacdCTvE3olHm',
            'client_url' => 'http://localhost:8081',
            'redirect' => 'http://localhost:8081/callback',
            'personal_access_client' => 0,
            'password_client' => 0,
            'revoked' => 0
        ]);
    }
}
