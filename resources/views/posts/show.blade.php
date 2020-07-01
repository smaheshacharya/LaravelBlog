@extends('layouts.app')

@section('content')
<div id="fb-root">
</div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=681305302322124&autoLogAppEvents=1"></script>

<a href="{{url('/posts')}}" class="btn btn-default">Go Back</a>

<h1 style="color:#2196f3">{{$body->title}}</h1>
<img style="width: 100%; height: 300px" src="{{url('storage/cover_images')}}/{{$body->cover_image}}">

<div style="font-size: 20px; margin-top: 20px">
	{{-- {{$body->body}} // yasto rakhda html parse gardain ckedtor use garda so talako prefer garene  --}}
	{!!$body->body!!}
</div>
<hr>
<small>Wtritten on :{{$body->created_at}} by {{$body->user['name']}}</small>
<hr>

@if(!Auth::guest()){{--  yadi guest ho bhane yo button nadekha natra dekha 
 --}}
	 @if(Auth::user()->id == $body->user_id) {{-- yasle chain jun user login xa telai matra login garna dinxa --}}
		 <a href="{{url('posts/')}}/{{$body->id}}/edit" class="btn btn-default">Edit</a>

		{!!Form::open(['action'=>['PostController@destroy',$body->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
			{{Form::hidden('_method','DELETE')}}
			{{Form::submit('Delete',['class'=>'btn btn-danger'])}}

		{!!Form::close()!!}
	@endif
@endif
<div class="fb-comments" data-href="{{Request::url()}}" data-width="" data-numposts="5">
</div>
@endsection
{{-- <div class="fb-comments" data-href="http://localhost/blog/public/posts/23" data-width="" data-numposts="5"></div> --}}

