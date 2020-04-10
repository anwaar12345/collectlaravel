<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 40px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>

            <div class="content">
                <div class="title m-b-md">
                   Computers Store
                </div>

<div class="title links">
<a href="{{route('home')}}" class="btn btn-success">Back</a>
</div>


<div class="container">

<div class="row"> <div class="col-sm-12"><P class="lead">We Have Following Products</P></div> </div>

<ul class="list-group">

@foreach($companies as $company => $products)
<h3>{{$company}}</h3>
@foreach($products as $product)
{{$product['name']}}
<li class="list-group-item list-group-item-action">Model Numer: {{$product['Serial']}} [{{$product['name']}} {{$product['company']}} {{$product['Model']}} {{$product['color']}} Rs.{{$product['price']}}-PKR ]</li>

@endforeach
@endforeach
</ul>
</div>

<h2> Total Products : {{$totalproducts}}</h2> 
<h2> Total Price : {{$totalprice}}</h2> 
<h2> Discount : {{$totaldiscounts}}</h2>      
<h2 style="border-bottom:3px solid black;"> Total Payable : {{$totalnet}} </h2>
<p class="lead"> Items You Got Free</p>
@foreach($freeitems as $product)
{{$company}} <br>
{{$product['name']}}
<li class="list-group-item list-group-item-action">Model Numer: {{$product['Serial']}} [{{$product['name']}} {{$product['company']}} {{$product['Model']}} {{$product['color']}} <del>Rs.{{$product['price']}}-PKR ]</del> <ins>FREE</ins></li>

@endforeach
</div>

        </div>
    </body>
</html>
