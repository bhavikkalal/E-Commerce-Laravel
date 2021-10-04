@extends('Master')
@section('content')

    <div class="container ">

        <div class="row">


            <div class="col-sm-4">
                <a href="#">Filter</a>
            </div>
                <div class="col-sm-4" >

                    @foreach($Product as $item)
                        <div class="Searched-items" style="border:1px dashed blue">
                            <a href="ProductDetail/{{$item['id']}}">
                                <img class="trending-img" src="{{$item['gallary']}}">
                                <div class="">
                                    <h3>{{$item['name']}}</h3>
                                    <h5>{{$item['description']}}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>





        </div>

    </div>

@endsection
