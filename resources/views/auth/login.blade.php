@extends('auth.master')

@section('content')
<div class="container">
	<form role="form" action="" method="post">
	  <div class="form-group">
	    <label for="user_login">Email address</label>
	    <input name="email" type="text" class="form-control" id="user_login" placeholder="Enter email">
	  </div>
	  <div class="form-group">
	    <label for="password">Password</label>
	    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
	  </div>
	  <button type="submit" class="btn btn-default">登录</button>
	</form>
</div>
@stop