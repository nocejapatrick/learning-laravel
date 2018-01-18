
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Create User</h1>

<!-- 
	{{ Form::open(['route'=>'place.store'])}}
		<div>
		{{ Form::label('username','Username: ')}}
		{{ Form::text('username')}}
		</div>

		<div style="margin-top: 10px">
		{{ Form::label('password','Password: ')}}
		{{ Form::text('password')}}
		</div>

		<div style="margin-top: 10px">
		{{ Form::submit('Login')}}
		</div>
	{{Form::close()}}
 -->

	{{ Form::open(array('uri'=>'place.store','method'=>'get')) }}
		<div>
		{{ Form::label('username','Username: ') }}
		{{ Form::text('username')}}
		</div>
		<div style="margin-top: 10px;">
		{{ Form::label('username','Password: ') }}
		{{ Form::text('password')}}		
		</div>

		<div style="margin-top: 10px;">
		{{ Form::submit('create user') }}
		</div>
	{{ Form::close() }}

</body>
</html>