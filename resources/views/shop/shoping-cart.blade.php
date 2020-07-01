@extends('layouts.shop_app')

@section('content')
@if(Session::has('cart'))
    
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-s">
        <ul class="list-group">
            @foreach ($products as $product)
                <li class="list-group-item">
                <span class="badge badge-dark">{{$product['qty']}}</span>
                <strong>{{$product['item']['name']}}</strong>
                <span class="label label-success">
                    {{$product['price']}}
                </span>
                <div class="btn-group">
                    <button class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">
                        Action <span class="caret"></span>
                        <ul class="dropdown-menu">
                            <li><a href="">Reduced by 1</a></li>
                            <li><a href="">Reduced All</a></li>
                        </ul>
                    </button>
                </div>
                </li>  
            @endforeach
        </ul>
    </div>
<div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-s">
    <strong>Total:{{$totalPrice}}</strong>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-s">
    <button type="button" class="btn btn-sm btn-danger">Checkout</button>
    </div>
</div>

@else
<div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-s">
    <strong>No Item in Cart</strong>
    </div>
</div>
@endif


@endsection