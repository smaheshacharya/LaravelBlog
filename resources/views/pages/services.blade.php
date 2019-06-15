@extends('layouts.app')
@section('content')
<div class="col-md-6 col-sm-12 partation">
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
<div class="col-md-6 col-sm-12">
	<h4>Associate With</h4>
 <ul class="list-group">
            <li class="list-group-item"><img src="{{url('storage')}}/profile/koseli.png"><a href="https://www.yourkoseli.com"> <h4>YourKoseli</h4></a></li>
            <li class="list-group-item"><img src="{{url('storage')}}/profile/alphateds.png"><a href="https://www.alphateds.com"><h4>AlphaTEDS</h4></a></li>
            <li class="list-group-item"><img src="{{url('storage')}}/profile/asmt.png"><a href="https://www.asm.edu"><h4>ASMT</h4></a></li>
             <li class="list-group-item"><img src="{{url('storage')}}/profile/iit.png"><a href="https://iitnepal.edu.np/"><h4>IIT Nepal</h4></a></li>
             <li class="list-group-item"><img src="{{url('storage')}}/profile/western.png"><a href="https://westernfoods.com.np/"><h4>Western Foods</h4></a></li>
            
    </ul>

	
</div>
@endsection