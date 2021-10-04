<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Commerce</title>

    <!-- JQUERY \ -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

    {{  View::make('Header')  }}

    @yield('content')

    {{  View::make('Footer')    }}

</body>


<style>
    .custom-login{
        height:500px;
        padding-top:100px;
    }

    .slider-img{
        height: 400px!important;
    }

    .custom-product{
        height:600px;

    }

    .carousel-caption{
        color: skyblue;
    }

    .trending-wrapper{
        margin: 20px;
    }

    .trending-items{
        float: left;
        width: 20%;
    }

    .trending-img{
        height: 100px;

    }

    .product-detail-img{
        height:200px;
    }

    .search-box{
        width: 500px!important;
    }
</style>

<script>

</script>

</html>
