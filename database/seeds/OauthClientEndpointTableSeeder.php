<?php

use Illuminate\Database\Seeder;
use App\OauthClientEndpoint;

class OauthClientEndpointTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('Oauth_client_endpoints')->delete();
        OauthClientEndpoint::create([
            'client_id' =>  'demo',
            'redirect_uri'  =>  'http://localhost/llaravel/public/api-docs',
        ]);
    }
}