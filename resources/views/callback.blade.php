@extends('auth.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<form role="form" action="{{ route('access_token') }}" method="post">
				<div class="form-group">
					<label>grant_type</label>
					<input class="form-control" type="text" name="grant_type" value="authorization_code">
				</div>
				<div class="form-group">
					<label>client_id</label>
					<input class="form-control" type="text" name="client_id" value="demo">
				</div>
				<div class="form-group">
					<label>client_secret</label>
					<input class="form-control" type="text" name="client_secret" value="VvaOgqny5qWCnkoLHvnmm23FN4Cydmfd">
				</div>
				<div class="form-group">
					<label>redirect_uri</label>
					<input class="form-control" type="text" name="redirect_uri" value="http://localhost/llaravel/public/callback">
				</div>
				<div class="form-group">
					<label>code</label>
					<input class="form-control" type="text" name="code" value="{{ Input::get('code') }}" readonly="readonly">
				</div>
				<div class="form-group">
					<label>state</label>
					<input class="form-control" type="text" name="state" value="{{ Input::get('state') }}" readonly="readonly">
				</div>
				<div class="form-group">
					<label>scope</label>
					<input class="form-control" type="text" name="scope" value="scope1">
				</div>
				<button class="btn btn-primary" type="submit">授权</button>
			</form>
		</div>	
	</div>
</div>
@stop