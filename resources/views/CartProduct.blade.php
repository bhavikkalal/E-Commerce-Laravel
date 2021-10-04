@extends('Master')
@section('content')

    <div class="container">

        <div class="row">
{{--            <div class="col-sm-6">--}}
{{--                <img class="product-detail-img" src="{{$CartProducts['gallary']}}">--}}
{{--            </div>--}}

            <div class="col-sm-6">
                <a href="/">Go Back</a>
                <h2>Name : {{$CartProducts['Product_id']}}</h2>
{{--                <h2>Price : {{$CartProducts['price']}}</h2>--}}
{{--                <h3>Category : {{$CartProducts['category']}}</h3>--}}
{{--                <h4>Description : {{$CartProducts['description']}}</h4>--}}

                <br>
                <br>

                <form action="/AddingToCart" method="post">
                    @csrf
{{--                    <input type="hidden" name="HiddenProductId" value="{{$CartProducts['id']}}">--}}
                    <button class="btn btn-success">Add to cart</button>
                </form>
                <br>
                <br>

                <button class="btn btn-primary"> Buy now </button>
            </div>
        </div>

    </div>

@endsection
