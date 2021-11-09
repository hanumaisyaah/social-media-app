<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="{{asset('assets/css/styleCreate.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>
	<link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	
	<div class="wrap mt-5">
		<h1>Sociaze</h1>
		<h3>Update your story here and see what people will think.</h3>
		<form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data" >
			@csrf
			<div>
				<label for="fname">Post Title</label>
				<br>
				<input id="title" type="text" class="cool" name = "title"/>
			</div>
			
			<div>
				<label for="lname">Post Caption</label>
				<br>
				<input id="caption" type="text" class="cool" name = "caption" />
			</div>
			
			<div>
				<label for="email">Post Photo</label>
				<br>
				<input id="photo" type="file" class="cool" name = "foto"/>
			</div>
			
			<div>
				<div class="buttonContainer" style="display: flex">
					<a href = "{{url('home')}}"class="btn btn-dark btnCustomOutline" href="">Back</a>
					<button type = "submit" class="btn btn-dark btnCustom" href="">Mulai Sekarang</button>
				</div>
			</div>

		</form>
		
	</div>

	<script src = "{{asset('assets/js/scriptCreate.js')}}"></script>
	<script  href="{{asset('assets/js/script.min.css')}}"></script>
</body>
</html>