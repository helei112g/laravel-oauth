<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\OauthClientScope;

class OauthClientScopeTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('oauth_client_scopes')->delete();
        
        OauthClientScope::create([
            'client_id' =>  'demo',
            'scope_id'  =>  'scope1',
        ]);
    }
}