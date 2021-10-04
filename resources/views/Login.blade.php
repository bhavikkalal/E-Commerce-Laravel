@extends('Master')
@section('content')

    <div class="container custom-login">
        <h1 class="text-center">Login Page</h1>

        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">


                <form action="/Login" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="LoginEmail">Email address</label>
                        <input type="text" class="form-control" name="LoginEmail" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="LoginPassword">Password</label>
                        <input type="password" class="form-control" name="LoginPassword" placeholder="Password">
                    </div>

                    <button type="submit" name="LoginSubmit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>

@endsection
