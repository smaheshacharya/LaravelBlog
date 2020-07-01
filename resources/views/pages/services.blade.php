@extends('layouts.app')
@section('content')
<div class="col-md-10 col-sm-12 partation">
<h4>Education</h4>
    <ul class="list-group">
           <li class="list-group-item">{{$Education}}</li>
    </ul>

<h4>{{$title}}</h4>
@if(count($Services)>0)
    <ul class="list-group">
            @foreach($Services as $service)
            <li class="list-group-item">{{$service}}</li>
            @endforeach
    </ul>
@endif
<h4>Works On</h4>
<ul class="list-group">
       <li class="list-group-item">{{$work_on}}</li>
</ul>
<h4>Skills</h4>
<ul class="list-group">
       <li class="list-group-item">{{$skills}}</li>
</ul>
<h4>Contact</h4>
@if(count($contact)>0)
    <ul class="list-group">
            @foreach($contact as $con)
            <li class="list-group-item">{{$con}}</li>
            @endforeach
    </ul>
@endif

	<a  href="{{url('storage')}}/file/cv.pdf" class="btn btn-primary" > <i class="fa fa-file" style="margin-right: 5px;"></i>Download CV</a>

</div>
@endsection