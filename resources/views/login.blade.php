<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/uh.css')}}">
	<link rel="stylesheet" href="{{asset('assets/img/inumaki.jpeg')}}">
    <title>Todo App</title>
</head>
<body>
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Log In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<form class="sign-in-htm" method="POST" action="{{route('login.auth')}}">
                @csrf
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" type="text" class="input" name="email">
					@error('email')
						{{$message}}
					@enderror
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="password">
					@error('password')
						{{$message}}
					@enderror
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					{{session('error')}}
					<a href="#forgot">Forgot Password?</a>
				</div>
            </form>
			<form method="POST" action="{{route('register.createAccount')}}" class="sign-up-htm">
                @csrf
				<div class="group">
					<label for="user" class="label">Nama Lengkap</label>
					<input id="user" type="text" class="input" name="name">
				</div>
				<div class="group">
					<label for="pass" class="label">Username</label>
					<input id="pass" type="text" class="input" name="username">
				</div>
				<div class="group">
					<label for="pass" class="label">Email</label>
					<input id="pass" type="email" class="input" name="email">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" name="password">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
            </form>
		</div>
	</div>
</div>
</body>
</html>