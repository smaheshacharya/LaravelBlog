@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="posts/create" class="btn btn-primary">Create Post</a>

               
                @if(count($posts)>0)
                 <h3>Your Blog Posts</h3>
                <table class="table table-striped">
                <tr>
                    <th>Title</th>
                    <th></th>
                    <th></th>
                </tr>
                    @foreach($posts as $post)
                    <tr>
                        <td style="font-size: 15px; color: #2196f3">{{$post->title}}</td>
                        <td><a href="{{url('posts')}}/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                        <td>
                            {!!Form::open(['action'=>['PostController@destroy',$post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}

                            {!!Form::close()!!}
                        </td>

                    </tr>
                    @endforeach
                </table>
                @else
                <h3>Post Not Found</h3>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
