@extends('layouts.shop_app')

@section('content')
@if(count($items) > 0)
@foreach ($items as $item)
<div class="col-md-4">
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">{{$item->name}}</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="{{route('product.addToCart',['id'=>$item->id]) }}" class="btn btn-sm btn-primary"><i class="fa fa-shopping-cart"></i></a>
          <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-heart"></i></a>
        </div>
      </div>
</div>
@endforeach

@else
<div class="alert alert-primary" role="alert">
    Currently no item !
  </div>
@endif


@endsection