@extends('layouts.app')

@section('content')

@if(count($posts) > 0)
	@foreach($posts as $post)
	<div class="well">
		<div class="row">
			<div class="col-md-3 col-sm-3">
				<img style="width: 100%; height: auto" src="storage/cover_images/{{$post->cover_image}}">
			</div>
			<div class="col-md-9 col-sm-9">
				<h2><a href="posts/{{$post->id}}"> {{$post->title}}</a></h2>
				<small>Written As:{{$post->created_at}} by {{$post->user['name']}}</small>
			</div>

		</div>
	
	</div>
	
	
	@endforeach
	{{$posts->links()}} {{-- pagination --}}
@else
 <a href="posts/create" class="btn btn-primary">Create Post</a>
<h3>Data Not Found</h3>
@endif

@endsection