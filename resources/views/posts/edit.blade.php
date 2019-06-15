@extends('layouts.app')

@section('content')
<h1>Edit Post</h1>
{!! Form::open(['action'=>['PostController@update',$body->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
    
    <div class ="form-group">
    	{{Form::label('title','Title')}}
    	{{Form::text('title',$body->title, ['class'=>'form-control','placeholder'=>'Titel Text'])}}

    </div>
       <div class ="form-group">
    	{{Form::label('body','Body')}}
    	{{Form::textarea('body',$body->body, ['id' => 'ckeditor-demo','class' => 'form-control','placeholder' => 'Body Text'])}}

    </div> 
    <div class ="form-group">
        {{Form::file('cover_image')}}
        
    </div> 
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Update',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection