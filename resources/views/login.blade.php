<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<script src="/js/jquery.js"></script>
	<title>Login</title>
</head>
<body>
	<ul>
		<li><a href="" id="login">Login</a></li>
		<li><h1 id="role">Guest</h1></li>
	</ul>
	<div class="container" id="content">
		{{ Form::open(['uri'=>'v1.auth.login', 'id'=>'loginForm'])}}
			<div>
			{{Form::label('username','Username')}}
			{{Form::text('username')}}
			</div>

			<div>
			{{Form::label('password','Password')}}
			{{Form::password('password')}}
			</div>

			<div>
			{{Form::submit('Login')}}
			</div>

		{{Form::close()}}
	</div>
	

	<p id="token"></p>
	<script type="text/javascript">

		(function(){
			
			var form = $('#loginForm');


			form.on('submit', function(e){
				var self = this;
				e.preventDefault();
				$.ajax({
					url: $(self).attr('action'),
					method: 'POST',
					data: $(self).serialize(),
					dataType: "json",
					success: function(r){
						console.log(r);
						$("#login").text("logout");
						$('#login').attr('href','http://localhost:8000/v1/auth/logout?token='+r.body.token);
						$('#login').attr('id','logout');
						$('#logout').on('click',function(e){
							e.preventDefault();
							var self = this;
							$.ajax({
								url: "/v1/auth/logout",
								method: 'get',
								dataType:'json',
								data: {token : r.token},
								success:function(r){

								},
								error:function(r){

								}
							});

						});
						$("#role").text(r.role);
					},
					error: function(r){
						console.log(r);
					}
				})
			});
			
		})();
	</script>
</body>
</html>