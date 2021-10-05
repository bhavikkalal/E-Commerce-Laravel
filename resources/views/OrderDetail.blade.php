@extends('Master')
@section('content')

    <div class="container ">

        <div class="row">

            <div class="container">
                <h2>Order Detail</h2>
                <table class="table table-striped">

                    <tr>
                        <th>Total :</th>
                        <td>{{$TotalPrice}} INR</td>
                    </tr>

                    <tr>
                        <th>Tax :</th>
                        <td>0 INR</td>
                    </tr>

                    <tr>
                        <th>Delivery Charge :</th>
                        <td>100 INR</td>
                    </tr>

                    <tr>
                        <th>Total :</th>
                        <td>{{$TotalPrice + 100}} INR</td>
                    </tr>

                </table>

                <form action="/OrderNow" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Address</label>
                        <textarea class="form-control" name="Address"> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Payment Method</label>
                        <p><input type="radio" value="Online Payment" name="PaymentMethod"> <span>Online Payment</span></p>
                        <p><input type="radio" value="Card Payment" name="PaymentMethod"> <span>Card Payment</span></p>
                        <p><input type="radio" value="Cash On delivery" name="PaymentMethod"> <span>Cash On delivery</span></p>
                    </div>

                    <button type="submit" name="BuySubmit" class="btn btn-primary">Order Now</button>
                </form>

            </div>

        </div>

    </div>

@endsection
