<?php

use Illuminate\Database\Seeder;
use App\OauthScope;
class OauthScopeTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('oauth_scopes')->delete();
        
        for ($i=1; $i<3; $i++) {
            OauthScope::create([
                'id'    =>  "scope{$i}",
                'description'   =>  "获取scope{$i}的权限",
            ]);
        }
    }
}