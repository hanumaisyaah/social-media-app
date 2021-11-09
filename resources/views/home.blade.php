<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="{{asset('assets/css/styleHome.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>
	<div class="dd_heading mt-5">
		<h1 class="text-center">SOCIAZE</h1>
		<h3 class="text-center">Place for you to photo story</h3>
		<br>
		<br>
		<a href="{{route('post.create')}}" class = "btn btnCustom" > + Add new Photo</a>
	</div>
	<main class="page-content mt-5">
		<div class="card" style="box-shadow: -2px 6px 17px -13px rgba(0,0,0,0.84);">
			<img class="card-img-top"
				src="https://images.unsplash.com/photo-1581017601156-b4e8e53df291?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2734&q=80"
				alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
				</p>
			</div>
		</div>
		@foreach($post as $p)
		<div class="card" style="box-shadow: -2px 6px 17px -13px rgba(0,0,0,0.84);">
			<img class="card-img-top" src="{{$p->foto}}" 
			alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">{{$p->title}}</h5>
				<p class="card-text">{{$p->caption}}
				</p>
			</div>
		</div>
		@endforeach
	</main>

	<footer>
		<div>
			<center><h5>&copy Sociaze 2021</h5></center>
		</div>
	</footer>
</body>
</html>