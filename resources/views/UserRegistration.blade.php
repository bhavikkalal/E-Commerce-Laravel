@extends('Master')
@section('content')

    <div class="container custom-login">
        <h1 class="text-center">Registration</h1>

        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">

                <form action="/Registration" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="registerName">Name</label>
                        <input type="text" class="form-control" name="registerName" placeholder="Enter name">
                    </div>

                    <div class="form-group">
                        <label for="registerEmail">Email address</label>
                        <input type="text" class="form-control" name="registerEmail" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="registerPassword">Password</label>
                        <input type="password" class="form-control" name="registerPassword" placeholder="Password">
                    </div>

                    <button type="submit" name="registerSubmit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>

@endsection
