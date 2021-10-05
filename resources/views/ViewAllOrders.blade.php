@extends('Master')
@section('content')

    <div class="container ">

        <div class="row">
            <h1>
                Orders List
            </h1>


            <div class="col-sm-10">
                <a class="" href="/">Back</a>
                <br>
                <br>
                @foreach($AllOders as $item)
                    <div class="row Searched-items Cart-list-devider">
                        <div class="col-sm-3">
                            <a href="ProductDetail/{{$item->id}}">
                                <img class="trending-img" src="{{$item->gallary}}">
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <div class="">
                                <h3>{{$item->name}}</h3>
                                <h5><b>Delivery Status</b> :{{$item->status}}</h5>
                                <h5><b>Payment Status</b> : {{$item->payment_status}}</h5>
                                <h5><b>Payment Method</b> : {{$item->payment_method}}</h5>
                                <h5><b>Delivery address</b> : {{$item->address}}</h5>
                                <h5><b>Price </b> : {{$item->price}}</h5>
                            </div>
                        </div>


                    </div>
                    <br>
                    <br>

                @endforeach
            </div>


        </div>

    </div>

@endsection
