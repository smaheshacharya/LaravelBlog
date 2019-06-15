@extends('layouts.app')

@section('content')
<h1>Create Post</h1>
{!! Form::open(['action'=>'PostController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    
    <div class ="form-group">
    	{{Form::label('title','Title')}}
    	{{Form::text('title','', ['class'=>'form-control','placeholder'=>'Titel Text'])}}

    </div>
       <div class ="form-group">
    	{{Form::label('body','Body')}}
    	{{Form::textarea('body','', ['id' => 'ckeditor-demo','class' => 'form-control','placeholder' => 'Body Text'])}}

    </div> 
       <div class ="form-group">
    	{{Form::file('cover_image')}}
    	
    </div> 
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection