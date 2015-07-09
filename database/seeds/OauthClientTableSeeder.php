<?php

use Illuminate\Database\Seeder;
use App\OauthClient;

class OauthClientTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('oauth_clients')->delete();
        OauthClient::create([
            'id'    =>  'demo',
            'secret'=>  'VvaOgqny5qWCnkoLHvnmm23FN4Cydmfd',
            'name'  =>  'bnersoft',
        ]);
    }
}