@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h3>Resauls of Products</h3>
            <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
            @foreach ($products as $item)
            <div class="row searched-item cart-list-devider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{ $item->gallary }}" >
                        </a>
                </div>
                <div class="col-sm-6">
                    <div class="">
                        <h3>{{ $item->name}}</h3>
                        <h5>{{ $item->description }}</h5>
                    </div>
                </div>
                <div class="col-sm-3">
                    <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Remove to Cart </a>
                </div>
            </div>
            @endforeach
            <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>

        </div>
    </div>
</div>
@endsection
