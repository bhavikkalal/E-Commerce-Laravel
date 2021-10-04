@extends('Master')
@section('content')

    <div class="container">

        <div class="row">
            <div class="col-sm-6">
                <img class="product-detail-img" src="{{$Product['gallary']}}">
            </div>

            <div class="col-sm-6">
                <a href="/">Go Back</a>
                <h2>Name : {{$Product['name']}}</h2>
                <h2>Price : {{$Product['price']}}</h2>
                <h3>Category : {{$Product['category']}}</h3>
                <h4>Description : {{$Product['description']}}</h4>

                <br>
                <br>

                <form action="/AddingToCart" method="post">
                    @csrf
                    <input type="hidden" name="HiddenProductId" value="{{$Product['id']}}">
                <button class="btn btn-success">Add to cart</button>
                </form>
                <br>
                <br>

                <button class="btn btn-primary"> Buy now </button>
            </div>
        </div>

    </div>

@endsection
