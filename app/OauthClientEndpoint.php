<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OauthClientEndpoint extends Model
{
    //
    protected $table = 'oauth_client_endpoints';
    protected $fillable = ['client_id', 'redirect_uri'];
}
